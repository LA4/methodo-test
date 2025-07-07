#!/bin/bash
# PhpStan
echo "Exécution de PhpStan"
vendor/bin/phpstan analyse ./src
# Php-CS-Fixer
echo "Exécution de Php-CS-Fixer"
vendor/bin/php-cs-fixer fix src


# PhpUnit
echo "Exécution des tests unitaires"
vendor/bin/phpunit  ./tests/unit

# PhpUnit
echo "Exécution des tests d'intégration"
vendor/bin/phpunit  ./tests/integration


# Lancer Php en local en arrière-plan
echo "Démarrage du serveur PHP local..."
php -S 127.0.0.1:8000 > /dev/null 2>&1 & # Exécuter en arrière-plan, rediriger la sortie vers null
SERVER_PID=$! # Capturer l'ID du processus du serveur en arrière-plan

# Attendre un instant pour que le serveur démarre complètement
sleep 2

# Behat
echo "Exécution des tests de bout en bout"
vendor/bin/behat

# Arrêter le serveur PHP local
echo "Arrêt du serveur PHP local..."
kill $SERVER_PID

read -p "fermer la fenêtre pour quitter"