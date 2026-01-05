FROM php:8.2-fpm

# 1. Install System Dependencies
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# --- BAGIAN PENTING (OPTIMASI) ---

# 2. Copy file composer dulu (agar bisa dicache kalau tidak ada perubahan dependency)
COPY composer.json composer.lock ./

# 3. Install Vendor SEKARANG (Sebelum copy codingan lain)
# --no-dev: Jangan install phpunit dkk untuk production
# --no-scripts: Supaya tidak error karena folder app belum ada
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 4. Baru copy sisa codingan Laravel
COPY . .

# 5. Set Permission Storage
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# 6. Copy Entrypoint Script (Kita buat dibawah)
COPY ./docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 9000

# Ganti CMD default dengan script pintar kita
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
