#!/bin/bash
curl https://getcomposer.org/installer > composer-setup.php
export HOME=/home/ppsuinsgd && ea-php72 -c php.ini composer-setup.php
ea-php72 -r "unlink('composer-setup.php');"
ea-php72 -c php.ini composer.phar install
ea-php72 -r "unlink('composer.phar');"