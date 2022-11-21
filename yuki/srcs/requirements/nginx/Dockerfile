FROM debian:buster

#-y はyes/no の時のyes
RUN            set -eux;
RUN apt-get update && apt-get install -y \
    nginx \
    openssl \
    vim \
    sudo

COPY conf/nginx.conf /etc/nginx/sites-enabled/default
COPY tools/index.nginx-debian.html /var/www/html

#CMD ["nginx","-g","deamon off;"]
