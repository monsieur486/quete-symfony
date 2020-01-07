#!/usr/bin/bash
git pull
php composer.phar self-update
php composer.phar install
yarn install
php bin/console cache:clear
yarn encore dev
php bin/console d:s:u --force
php bin/console d:s:v
