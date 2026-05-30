# Laravel Blog (Laravel Sail) — Auth + Posts CRUD

A simple blog application built with **Laravel**, **Laravel Breeze** (Blade + Alpine), and containerized local development using **Laravel Sail** (Docker).

## Tech Stack
- Laravel (PHP)
- Laravel Breeze (Blade + Alpine)
- MySQL (via Docker / Sail)
- Vite + Tailwind (frontend build)
- Laravel Sail (Docker Compose wrapper)

---

## Requirements
- Docker Desktop (or Docker Engine + Docker Compose)
- Git

> You do **not** need to install PHP, Composer, MySQL, or Node locally if you use Sail.

---

## Getting Started (First-time Setup)

### 1) Clone the repository
```bash
git clone https://github.com/<YOUR_USERNAME>/<YOUR_REPO>.git
cd <YOUR_REPO>
2) Create your environment file
cp .env.example .env
3) Install PHP dependencies (Composer) using a temporary container
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php84-composer:latest \
  composer install
4) Start Sail (Docker containers)
./vendor/bin/sail up -d
5) Generate the application key
./vendor/bin/sail artisan key:generate
6) Run database migrations
./vendor/bin/sail artisan migrate
7) Install frontend dependencies and build assets
./vendor/bin/sail npm install
./vendor/bin/sail npm run build
8) Open the app
http://localhost