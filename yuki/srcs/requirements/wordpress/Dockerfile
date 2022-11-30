FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade && apt-get -y install php7.3 php7.3-fpm php7.3-mysql php7.3-json php7.3-mbstring php7.3-common php7.3-curl mariadb-client wget curl

EXPOSE 9000

COPY ./conf/ .

COPY ./tools/wordpress.sh /

RUN chmod +x /wordpress.sh
ENTRYPOINT  [" /wordpress.sh"]
#ENTRYPOINT  ["tail", "-f"]
