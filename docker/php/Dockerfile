FROM php:8.0-fpm
COPY php.ini /usr/local/etc/php/


RUN apt update \
    # zlibはデータの圧縮に関するアルゴリズムをライブラリ化したもの
    # vimをインストール
    # MariaDBデータベースのクライアントアプリケーションである「mysql」を使えるように「mariadb-client」をインストール
    # libzip-devはzip圧縮時に必要となるライブラリ(libzip は、zlib を使用する)
    && apt install -y zlib1g-dev mariadb-client vim libzip-dev \
    # docker-php-ext-installはPHPに標準で備わっている拡張パッケージのインストール＆有効化ができるコマンド
    # PDO_MYSQL は、PHP から MySQL データベースへのアクセスを可能にするための PHP Data Objects (PDO) インターフェイス を実装したドライバ。
    && docker-php-ext-install zip pdo_mysql \
    # gitのインストール
    && apt install -y git 

#Composer install
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin


WORKDIR /var/www

RUN composer global require "laravel/installer"