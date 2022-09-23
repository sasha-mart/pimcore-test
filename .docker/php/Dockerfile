FROM pimcore/pimcore:PHP8.1-fpm

RUN apt-get update \
    && apt-get install -y \
    autoconf \
    make\
    librabbitmq-dev \
    && pecl install amqp \
    && docker-php-ext-enable amqp \
