FROM delboy1978uk/php84:1.0.0
COPY ./php/php-ini-overrides.ini /usr/local/etc/php/conf.d/99-overrides.ini
COPY ./php/ssmtp.conf /etc/ssmtp/ssmtp.conf
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --filename=composer
RUN rm composer-setup.php
RUN chown -R 1000:staff ./composer
RUN mv ./composer /usr/bin/composer
RUN useradd --uid 1000 --create-home php
RUN echo "export PATH=$PATH:bin:vendor/bin" > /home/php/.bashrc
COPY ./certificates/proxyman_ca.crt /usr/local/share/ca-certificates/proxyman_ca.crt
RUN chmod 644 /usr/local/share/ca-certificates/proxyman_ca.crt && update-ca-certificates

RUN sed -i 's|^;error_log =.*|error_log = /proc/self/fd/2|' /usr/local/etc/php-fpm.conf \
 && sed -i 's|^;log_level =.*|log_level = notice|' /usr/local/etc/php-fpm.conf

RUN sed -i '/^\[www\]/a \
catch_workers_output = yes\n\
decorate_workers_output = no\n\
php_flag[log_errors] = On\n\
php_admin_flag[log_errors] = On\n\
php_admin_value[error_log] = /proc/self/fd/2\n\
php_admin_value[error_reporting] = -1\n\
access.log = /proc/self/fd/2\n\
' /usr/local/etc/php-fpm.d/www.conf

CMD ["php-fpm", "--nodaemonize"]
