Development on Linux (Debian based):

https://code.visualstudio.com/docs/languages/cpp

sudo apt install libjsoncpp-dev libtagc0-dev libboost-dev
sudo apt install apache2 php

sudo mkdir /home/fpp
sudo chown jrhubott:jrhubott fpp
mkdir /home/fpp/media
mkdir /home/fpp/config


php.ini requires:
short_open_tag = on


# PHP 5 on new ubuntu install
http://askubuntu.com/questions/761713/how-can-i-downgrade-from-php-7-to-php-5-6-on-ubuntu-16-04

## Switch PHP version:

From php5.6 to php7.0 :
Apache:
sudo a2dismod php5.6 ; sudo a2enmod php7.0 ; sudo service apache2 restart
CLI:
sudo ln -sfn /usr/bin/php7.0 /etc/alternatives/php
from php7.0 to php5.6:
Apache:
sudo a2dismod php7.0 ; sudo a2enmod php5.6 ; sudo service apache2 restart
CLI:
sudo ln -sfn /usr/bin/php5.6 /etc/alternatives/php



# Debugging notes:
https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug