node {
    def app

    stage('Clone repository') {
        checkout scm
    }

    stage('Build image') {
        app = docker.build("kristianwindsor/kristianwindsor.com")
    }

    stage('Push image') {
        docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
            app.push("b${env.BUILD_NUMBER}")
            app.push("latest")
        }
    }
}