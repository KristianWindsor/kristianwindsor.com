node {
    def app

    stage('Clone repository') {
        checkout scm
    }

    stage('Build') {
        app = docker.build("kristianwindsor/kristianwindsor.com")
    }

    stage('Push') {
        docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
            app.push("b${env.BUILD_NUMBER}")
            app.push("latest")
        }
    }
    stage('Deploy') {
        sh """
            sed -i "s/kristianwindsor\.com.*/kristianwindsor\.com.:$IMAGE_TAG/" deployment.yaml
            kubectl apply -f deployment.yaml
        """
    }
}