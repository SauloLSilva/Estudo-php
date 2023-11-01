# Repositório para estudo de linguagem php

Instalar Php:
sudo apt update
sudo apt upgrade
sudo apt install apache2
sudo systemctl start apache2
sudo systemctl enable apache2
sudo apt install mysql-server
sudo systemctl start mysql
sudo systemctl enable mysql
sudo apt install php libapache2-mod-php php-mysql
sudo systemctl restart apache2

Testar php:
inserir arquivo teste.php em /var/www/html
localhost/teste.php
ou
php teste.php
