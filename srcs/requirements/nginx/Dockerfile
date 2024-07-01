FROM debian:buster

RUN apt-get update && apt-get install -y nginx openssl vim

COPY ./conf/default.conf /etc/nginx/conf.d/default.conf
COPY ./tools/nginx_start.sh /var/www

RUN chmod +x /var/www/nginx_start.sh
ENTRYPOINT [ "/var/www/nginx_start.sh" ]

CMD ["nginx", "-g", "daemon off;"]