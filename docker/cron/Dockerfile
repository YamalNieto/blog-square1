FROM php:7.3.6-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

COPY ./docker/cron/crontab /etc/crontabs/root

CMD ["crond", "-f"]
