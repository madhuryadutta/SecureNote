php artisan cache:clear
php artisan config:clear
php artisan event:clear
php artisan route:clear

git pull
composer update
composer install --optimize-autoloader --no-dev

php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link