FROM debian:buster

RUN apt-get update && apt-get -y install mariadb-server \
    vim \


EXPOSE 3306


RUN rm -rf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./requirements/mariadb/conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./requirements/mariadb/tools/env.sh ./
COPY ./requirements/mariadb/tools/create_db.sql ./
RUN chmod +x env.sh
RUN sh env.sh

RUN service mysql start && mysql < create_db.sql

CMD ["mysqld_safe"]
