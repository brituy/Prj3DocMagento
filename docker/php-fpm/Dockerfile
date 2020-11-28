FROM php:7.4-fpm

# Install System Dependencies
RUN apt-get update && apt-get install -y \
        cron \
        git \
        gzip \
        libbz2-dev \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libonig-dev \
        libpng-dev \
        libsodium-dev \
        libssh2-1-dev \
        libxslt1-dev \
        libzip-dev \
        lsof \
        default-mysql-client \
        vim \
        zip \
        procps

# Install Magento Dependencies
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install \
    bcmath \
    bz2 \
    calendar \
    ctype \
    #curl \
    dom \
    exif \
    gd \
    gettext \
    iconv \
    intl \
    mbstring \
    #mcrypt \
    mysqli \
    opcache \
    pcntl \
    pdo_mysql \
    soap \
    sockets \
    sodium \
    sysvmsg \
    sysvsem \
    sysvshm \
    xml \
    xsl \
    zip 

# Install XDebug
RUN pecl channel-update pecl.php.net \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug
#   \
#  && sed -i -e 's/^zend_extension/\;zend_extension/g' /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN apt-get install -y libssh2-1-dev \
  && git clone https://git.php.net/repository/pecl/networking/ssh2.git /tmp/ssh2 \
  && cd /tmp/ssh2 \
  && ./.travis/build.sh \
  && docker-php-ext-enable ssh2

# Install Node, NVM, NPM and Grunt
RUN apt-get install -y gnupg \
  && curl -sL https://deb.nodesource.com/setup_10.x | bash - \
  && apt-get install -y nodejs \
  && mkdir /var/www/.config /var/www/.npm \
  && chown www-data:www-data /var/www/.config /var/www/.npm \
  && npm install -g grunt-cli

#Sendmail  
RUN curl -sSLO https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 \
  && chmod +x mhsendmail_linux_amd64 \
  && mv mhsendmail_linux_amd64 /usr/local/bin/mhsendmail

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer && chmod +x /usr/local/bin/composer

COPY php.ini /usr/local/etc/php/

WORKDIR /var/www

CMD ["php-fpm"]  
EXPOSE 9000
