# Stackxis

Laravel marketing site. PHP only — no npm or Vite.

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Set `APP_URL` in `.env` for production.
