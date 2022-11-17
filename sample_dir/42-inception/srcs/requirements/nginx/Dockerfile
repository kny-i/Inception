#get base image latest alpine 
FROM alpine:3.16

#add nginx package
RUN apk update && apk upgrade && apk add --no-cache nginx 

#set port to use this docker image
EXPOSE 443

COPY ./requirements/nginx/conf/setup.sh .
RUN chmod +x setup.sh

CMD ["./setup.sh"]
