#!/bin/bash

# --- BAGIAN BARU: WAIT FOR DB ---
echo "Menunggu Database siap..."

# Loop terus sampai bisa connect ke host 'db' port 3306
# Kita pakai script PHP kecil untuk nge-ping database
until php -r "try { new PDO('mysql:host=db;port=3306', 'root', '$DB_PASSWORD'); echo 'Connected'; } catch (PDOException \$e) { exit(1); }" > /dev/null 2>&1; do
  echo "Database belum siap... menunggu 2 detik..."
  sleep 2
done

echo "Database sudah siap! Lanjut..."
# --------------------------------

if [ "$APP_ENV" = "production" ]; then
    echo "🚀 Production mode detected!"
    echo "Caching config..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

echo "Running migrations..."
php artisan migrate --force

echo "Starting PHP-FPM..."
php-fpm
