FROM debian:buster

RUN            set -eux;

RUN apt-get -y update && apt-get -y upgrade && apt-get -y install php7.3 \
    php7.3-fpm \
    php7.3-mysql \
    php7.3-json  \
    php7.3-mbstring \
    php7.3-common \
    php7.3-curl \
    mariadb-client \
    wget \
    curl \
    vim \
    emacs

EXPOSE 9000

COPY ./requirements/wordpress/conf/ .

COPY ./requirements/wordpress/tools/wordpress.sh /usr/local/bin/

CMD  ["./usr/local/bin/wordpress.sh"]
