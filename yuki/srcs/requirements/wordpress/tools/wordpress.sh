#!/bin/bash

#install wordpress
if [ -d /var/www/wordpress ]; then
	echo "wordpress dir is already exist"
else
	wget https://wordpress.org/latest.tar.gz
	tar -xzvf latest.tar.gz
	rm -rf latest.tar.gz
	cp -r wordpress /var/www/
fi

#mv conf files
rm -rf /etc/php/7.3/fpm/pool.d/www.conf
mv www.conf /etc/php/7.3/fpm/pool.d/www.conf

#setting wp-config.php
rm -rf /var/www/wordpress/wp-config-sample.php
mv  ./wp-config.php /var/www/wordpress/wp-config.php

#install wp-cli
if [ -f /usr/local/bin/wp ]; then
	echo "wp-cli is already exist"
else
	curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
	chmod 755 wp-cli.phar
	mv wp-cli.phar /usr/local/bin/wp
	echo "[DONE] wp-cli installed"
fi

#setup wp-cli wordpress
wp core --allow-root install --path=/var/www/wordpress --url=https://shogura.42.fr --title=inception --admin_user=root_ad --admin_password=root --admin_email="shogura@student.42tokyo.jp"
wp user create --allow-root shogura   shogura@42tokyo.com --user_pass=shogura  --path=/var/www/wordpress

#start php8-fpm
mkdir -p /run/php
/usr/sbin/php-fpm7.3 -F
