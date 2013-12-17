One-Click Deploy
===============

Setting Up

 * curl -sS https://getcomposer.org/installer | php
 * Node must be installed
 * cd app && composer.phar install
 * cd client && npm install
 * Re-creating the database
 * cd public

rm ../app/data/ocd.db
php ../app/vendor/bin/doctrine orm:schema-tool:drop --force
php ../app/vendor/bin/doctrine orm:schema-tool:create
chmod 777 ../app/data/ocd.db

