composer install --optimize-autoloader --no-dev
php artisan migrate
php artisan key:generate
php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link