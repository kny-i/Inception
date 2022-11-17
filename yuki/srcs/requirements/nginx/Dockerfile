FROM debian:buster

#-y はyes/no の時のyes
RUN            set -eux;
RUN apt-get update && apt-get install -y \
    nginx \
    openssl \
    vim \
    sudo

COPY conf/nginx.conf /etc/nginx/

EXPOSE 443


#CMD ["nginx","-g","deamon off;"]
