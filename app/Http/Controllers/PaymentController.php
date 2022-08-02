<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use Paypal\Exception\PayPalConnectionException;
use PayPal\Api\PaymentExecution;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Cart ;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $this->apiContext->setConfig($payPalConfig['settings']);
    }

    // ...

    public function payWithPayPal(Request $request)
    {
        
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($request->id);
        $amount->setCurrency('MXN');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        // $transaction->setDescription('See your IQ results');

        $callbackUrl = url('/paypal/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }

    public function payPalStatus(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return redirect('/cart-checkout')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);
        $subtotal=0;
        foreach (Cart::getContent() as $item){
            $subtotal=$subtotal+intval($item->price*$item->quantity);
            $totalCompra=$subtotal+($subtotal*0.08);
        }
        $usuario=DB::table('users')->find(auth()->id());
        $direccion=$usuario->direccion.' #'.$usuario->ncasa.' ';
        if ($result->getState() === 'approved') {
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            DB::table("tickets")
                ->insert([
                    "user_id" => auth()->id(),
                    "direccion"=>$direccion,
                    "total"=>$totalCompra,       
            ]);
            $ultimo=db::table("tickets")->select('id')->orderBy('id','desc') -> first();
            foreach (Cart::getContent() as $item){
                DB::table("lista_compras")
                ->insert([
                    "user_id"=>auth()->id(),
                    "comida_id" => $item->id,
                    "ticket_id" => $ultimo->id, 
                    "cantidad"=>$item->quantity,      
                ]);
            }
            Cart::clear();
            return redirect('/compras')->with(compact('status'));
            
        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return redirect('/cart-checkout')->with(compact('status'));
    }
    
    
}
