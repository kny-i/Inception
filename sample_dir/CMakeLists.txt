cmake_minimum_required(VERSION 3.23)
project(sample_dir)

set(CMAKE_CXX_STANDARD 14)

add_executable(sample_dir
        42-inception/srcs/requirements/mariadb/conf/50-server.cnf
        42-inception/srcs/requirements/mariadb/tools/create_db.sql
        42-inception/srcs/requirements/mariadb/tools/env.sh
        42-inception/srcs/requirements/mariadb/Dockerfile
        42-inception/srcs/requirements/nginx/conf/nginx.conf
        42-inception/srcs/requirements/nginx/conf/setup.sh
        42-inception/srcs/requirements/nginx/tools/shogura.42.fr.crt
        42-inception/srcs/requirements/nginx/tools/shogura.42.fr.key
        42-inception/srcs/requirements/nginx/Dockerfile
        42-inception/srcs/requirements/tools/shogura.42.fr.crt
        42-inception/srcs/requirements/tools/shogura.42.fr.key
        42-inception/srcs/requirements/wordpress/conf/wp-config.php
        42-inception/srcs/requirements/wordpress/conf/www.conf
        42-inception/srcs/requirements/wordpress/tools/wordpress.sh
        42-inception/srcs/requirements/wordpress/Dockerfile
        42-inception/srcs/docker-compose.yml
        42-inception/Makefile
        42-inception/MEMO.md
        42-inception/README.md)
