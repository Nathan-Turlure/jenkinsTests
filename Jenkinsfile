pipeline {
    agent any

    stages {
        stage('Install Dependencies') {
            steps {
                bat 'composer install'
            }
        }
        stage('Run Tests') {
            steps {
                bat 'vendor\\bin\\phpunit CalculatorTest.php'
            }
        }
    }
      post {
            always {
                junit 'rapports/*.xml'
            }
        }
}
