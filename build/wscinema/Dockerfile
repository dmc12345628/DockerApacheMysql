FROM registry.univ-lr.fr:81/iutlr-info/iutlr-info-devbox-php7-symfony:v3

####### vhosts activation
ADD vhosts /etc/apache2/sites-available

####### add activation
RUN a2ensite cine

####### service apache2 start
#CMD /usr/sbin/apache2ctl -D FOREGROUND
