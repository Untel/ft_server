FROM debian:buster
LABEL maintainer="adda-sil <adda-sil@student.42.fr>"

RUN apt-get update &&\
	apt-get install -y nginx\
	php7.3\
	php7.3-fpm\
	php7.3-mysql\
	mariadb-server\
	openssl

WORKDIR /etc/nginx
RUN rm sites-enabled/default
COPY srcs/nginx.conf conf.d/nginx.conf

WORKDIR /var/www/html
COPY srcs/phpMyAdmin.tar.gz .
RUN tar -xvf phpMyAdmin.tar.gz && mv phpMyAdmin-4.9.4-all-languages phpmyadmin && rm phpMyAdmin.tar.gz
COPY srcs/config.inc.php phpmyadmin/
COPY srcs/req.sql /tmp

RUN service mysql start && mysql < /tmp/req.sql

COPY srcs/wordpress.tar.gz .
RUN tar -xvf wordpress.tar.gz --strip-components=1 && rm wordpress.tar.gz
COPY srcs/wp-config.php .

RUN openssl req -x509 -out /etc/ssl/certs/wpadda.crt -keyout /etc/ssl/private/wpadda.key \
  -newkey rsa:2048 -nodes -sha256 \
  -subj '/CN=wpadda'

CMD service nginx start && service mysql start && service php7.3-fpm start && echo 'Done' && bash; sleep infinity & wait