FROM php:8.0-apache
RUN apt-get update && apt-get install -y iputils-ping