# Laravel Blog — Auth + Posts CRUD

## Getting Started (First-time Setup)

### 1) Clone the repository
```bash
git clone https://github.com/<YOUR_USERNAME>/<YOUR_REPO>.git
cd <YOUR_REPO>
```
### 2) Create your environment file
```bash
cp .env.example .env
```
### 3) Start the Docker containers
```bash
docker compose up -d --build
  ```
### 4) Install PHP dependencies (Composer)
```bash
docker compose exec app composer install
  ```
### 5) Generate the application key
```bash
docker compose exec app php artisan key:generate
  ```
### 6) Run database migrations
```bash
docker compose exec app php artisan migrate
  ```
### 7) Install frontend dependencies and build assets
```bash
docker compose exec app npm install
docker compose exec app npm run build
  ```
### 8) Open the app
http://localhost:8000

## API Endpoints
### Public
GET /api/posts
GET /api/posts/{id}
## Auth
POST /api/login
POST /api/logout
## Protected
POST /api/posts
PUT /api/posts/{id}
DELETE /api/posts/{id}