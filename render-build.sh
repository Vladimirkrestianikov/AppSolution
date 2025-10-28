composer install --no-dev --optimize-autoloader
npm install
npm run build

php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan storage:link
echo "✅ Build completed successfully!"
