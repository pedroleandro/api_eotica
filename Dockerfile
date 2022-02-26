FROM newdeveloper/apache-php

WORKDIR /var/www
RUN rm -rf /var/www/html
COPY . /var/www
RUN apt-get install -y php7.4-pgsql
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && rm composer-setup.php && mv composer.phar /usr/local/bin/composer && chmod a+x /usr/local/bin/composer
RUN chmod -R 777 /var/www/storage/*
RUN ls -s public html


