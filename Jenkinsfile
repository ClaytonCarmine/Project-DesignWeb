pipeline {
         agent any
         stages {
                 stage('Build') {
                 steps {
                     bat 'Hi, Marco. Starting to build the App.'
                 }
                 }
                 stage('Test') {
                 steps {
                    input('Do you want to proceed?')
                 }
                 }
                 stage('Deploy') {
                 parallel { 
                            stage('Deploy start ') {
                           steps {
                                bat "Start the deploy .."
                           } 
                           }
                            stage('Deploying now') {
                            agent {
                                    docker {
                                            reuseNode true
                                            image ‘nginx’
                                           }
                                    }
                            
                              steps {
                                bat "Docker Created"
                              }
                           }
                           }
                           }
                 stage('Prod') {
                     steps {
                                bat "App is Prod Ready"
                              }
                 
              }
}
}