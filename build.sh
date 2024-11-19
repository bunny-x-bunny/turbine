git pull

# build frontend
docker run --rm -v "$(pwd)":/opt -w /opt \
    node:23.1.0-alpine3.20 \
    npm install && npm run build

# install php deps
docker-compose -f docker-compose.prod.yml exec laravel sh -c "
    composer install --no-interaction --optimize-autoloader --no-dev &&
      php artisan config:cache && 
      php artisan route:cache && 
      php artisan view:cache && 
      php artisan optimize"

# clear opcache
docker-compose -f docker-compose.prod.yml restart laravel
