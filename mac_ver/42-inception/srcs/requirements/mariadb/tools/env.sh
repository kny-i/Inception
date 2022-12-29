#!/bin/bash

export MYSQL_ROOT_PASSWORD=root_pw
export MYSQL_USER=wordpress
export MYSQL_PASSWORD=wordpress
export MYSQL_DATABASE=wordpress

sed -i "s/MYSQL_DATABASE/wordpress/g" create_db.sql &&  sed -i "s/MYSQL_USER/wordpress/g" create_db.sql &&  sed -i "s/MYSQL_PASSWORD/wordpress/g" create_db.sql &&  sed -i "s/MYSQL_ROOT_PASSWORD/root_pw/g" create_db.sql
