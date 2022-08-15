let marker;
function iniciarMap(){
  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
  var coord = {lat:21.497616690525977 ,lng:  -104.88492114396149}; 
  var map = new google.maps.Map(document.getElementById('map'),{
    zoom: 15,
    center: coord,
    mapId: "9a499f0c2e56ef76",
    disableDefaultUI:true
  });
  marker = new google.maps.Marker({
    position: coord,
    map: map,
    animation: google.maps.Animation.DROP,
    icon: {
      url:"img/logo_jeringa.png",
      scaledSize: new google.maps.Size(50,50)
    }
  });
  marker.addListener("click", toggleBounce);
}
function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
  