## Step to do
1. Add php 8.2 into Openserver
- download php 8.2 from https://windows.php.net/download/
- https://github.com/SagePtr/openserver-php-8.2
- Download composer from https://getcomposer.org/download/
- install composer for php8.2
- select php 8.2 into openserver/settings/php
- restart openserver
- Open openserver/advanced/console run php -ini
- open file php.ini and add extension=zip,Pdo_mysql, ...
2. install composer , npm
- composer update
- npm install
3. Setup database
4. Setup domain
5. Copy file .env.example to .env
6. Run php artisan key:generate
7. Run php artisan migrate
8. Run php optimize
9. open file
