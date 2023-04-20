FROM omtvn/php81
RUN docker-php-ext-install mysqli pdo pdo_mysql

#COPY /docker/nginx /etc/nginx
WORKDIR /var/www/html/
#
COPY ./ /var/www/html/
#

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install


RUN chown -R nginx:nginx /var/www/html/storage
##RUN chmod 777 /usr/share/nginx/html/
RUN chmod -R 777 /var/www/html/storage
RUN chmod -R 777 /var/www/html/storage/logs


RUN chown -R nginx:nginx /var/www/html/public
RUN chown -R nginx:nginx /var/www/html/storage/logs
RUN mkdir -p /var/lib/nginx/tmp /var/log/nginx \
    && chown -R nginx:nginx /var/lib/nginx /var/log/nginx \
    && chmod -R 755 /var/lib/nginx /var/log/nginx
CMD ["/start.sh"]
#RUN chmod -R 775 /usr/share/nginx/html/public/

ENV COMPOSER_ALLOW_SUPERUSER 1
RUN composer update --no-scripts
RUN composer dump-autoload
