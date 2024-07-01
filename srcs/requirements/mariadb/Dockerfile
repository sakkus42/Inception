FROM debian:buster

RUN apt-get update
RUN apt-get -y install mariadb-server vim

COPY ./tools /var/www/
COPY ./conf /etc/mysql/mariadb.conf.d

RUN service mysql start && mysql < /var/www/initial_db.sql

CMD ["mysqld"]