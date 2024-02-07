pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://votre-repo-git-url.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }
        stage('Run Tests') {
            steps {
                sh 'vendor/bin/phpunit'
            }
        }
    }
}
