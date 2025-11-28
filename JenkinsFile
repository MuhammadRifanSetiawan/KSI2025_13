pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                echo "Mengambil kode terbaru dari GitHub..."
                checkout scm
            }
        }

        stage('Build') {
            steps {
                echo "Melakukan proses build aplikasi..."
                // contoh: compile java, build nodejs, dll
                // sh 'mvn clean package'
            }
        }

        stage('Test') {
            steps {
                echo "Menjalankan otomatisasi testing..."
                // sh 'mvn test'
            }
        }

        stage('Deploy') {
            steps {
                echo "Deploy ke server..."
                // contoh deploy via SSH:
                // sh 'scp target/app.jar user@server:/var/www/'
                // sh 'ssh user@server "systemctl restart app"'
            }
        }
    }
}
