FROM debian:buster

RUN            set -eux;

RUN apt-get update && apt-get install -y \
    mariadb-server \
    vim \
    sudo

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/setting.sh /usr/local/bin