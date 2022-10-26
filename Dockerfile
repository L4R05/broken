FROM php:8.1.1-apache
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && \
	docker-php-ext-install mysqli && \
	docker-php-ext-install pdo && \
	docker-php-ext-install pdo_mysql && \
	docker-php-ext-enable mysqli

RUN a2enmod rewrite
