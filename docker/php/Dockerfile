FROM php:7.2-cli

# ---------------------------------------------------------------
# PHP Extension: Gearman
# Download Gearman PECL extension for Gearman supporting PHP 7
RUN apt-get update
RUN apt-get -y --allow-unauthenticated install libgearman-dev wget unzip \
    && cd /tmp \
    && wget https://github.com/wcgallego/pecl-gearman/archive/gearman-2.0.3.zip \
    && unzip gearman-2.0.3.zip \
    && mv pecl-gearman-gearman-2.0.3 pecl-gearman \
    && cd pecl-gearman \
    && phpize \
    && ./configure \
    && make -j$(nproc) \
    && make install \
    && cd / \
    && rm /tmp/gearman-2.0.3.zip \
    && rm -r /tmp/pecl-gearman \
    && docker-php-ext-enable gearman