FROM debian:buster

#-y はyes/no の時のyes
RUN            set -eux;
RUN apt-get update && apt-get install -y \
    nginx \
    openssl \
    vim \
    sudo \
    emacs


RUN openssl req -x509 \
                -nodes \
                -days 365 \
                -newkey rsa:2048 \
                -keyout /etc/ssl/private/nginx.key \
                -out /etc/ssl/certs/nginx.crt \
                -subj "/C=JP/ST=Tokyo/L=Ropongi/O=42Tokyo/OU=students/CN=ykondo/emailAddress=ykondo@student.42tokyo.jp"

RUN mkdir -p /run/nginx
COPY ./requirements/nginx/conf/nginx.conf /etc/nginx/conf.d/default.conf


COPY ./requirements/nginx/tools/index.html /var/www/html

ENTRYPOINT ["nginx", "-g", "daemon off;"]
