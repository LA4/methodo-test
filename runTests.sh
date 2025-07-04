#!/bin/bash
#php Stan
echo "Run php Stan"
vendor/bin/phpstan analyse ./src
# php Cs fixer
echo "Run php cs fixer"
vendor/bin/php-cs-fixer fix src
# php MD
echo "Run php Md"
vendor/bin/phpmd ./src text codesize,unusedcode,naming
# Php Unit
echo "Run tests"
vendor/bin/phpunit  ./tests

read -p "fermer la fenêtre pour quitter"


