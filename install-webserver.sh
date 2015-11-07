#!/bin/bash

sudo apt-get update -y
sudo apt-get install -y apache2 git php5 php5-curl mysql-client curl php5-mysql

git clone https://github.com/lruiabc/itmo-544-444-mp1.git

#mv ./../itmo-544-444-mp1/images /var/www/html/images
#mv ./../itmo-544-444-mp1/vendor /var/www/html/vendor
mv ./../itmo-544-444-mp1/index.html /var/www/html
#mv ./../itmo-544-444-mp1/*.php /var/www/html



#./install-env.sh


echo "hello!" >/tmp/hello.txt

sudo reboot
