pipeline {
    agent any

    stages {
        stage('Install Dependencies') {
            steps {
                // Installer les dépendances avec Composer
                bat 'composer install'
                bat 'composer update -W'
            }
        }
        stage('Run Tests') {
            steps {
                bat 'vendor\\bin\\phpunit --log-junit=rapports/test-results.xml'
            }
        }
    }
    post {
        always {
            junit 'rapports/test-results.xml'
        }
    }
}
