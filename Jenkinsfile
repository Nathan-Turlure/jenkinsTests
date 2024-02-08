pipeline {
    agent any

    stages {
        stage('Run Tests') {
            steps {
                bat 'vendor\\bin\\phpunit'
            }
        }
    }
}
