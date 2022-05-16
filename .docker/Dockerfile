FROM webdevops/php:7.4
MAINTAINER Descamps Antoine <antoine.descamps@ineat-conseil.fr>

RUN apt update
RUN apt install nodejs -y && apt install npm -y
# Install Postgre PDO
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql
