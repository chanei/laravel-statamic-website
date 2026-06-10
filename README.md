# Statamic Website

A website built with Laravel and Statamic CMS.

## Technology Stack

* Laravel
* Statamic CMS
* Tailwind CSS
* Vite
* PHP 8.4
* Docker
* Nginx
* Supervisor

## Requirements

### Local Development

* PHP 8.3^
* Composer
* Node.js & NPM

### Docker Deployment

* Docker

---

## Local Development Setup

### Install Dependencies

```bash
composer install
npm install
```

### Environment Setup

Copy the environment file and generate an application key:

```bash
cp .env.example .env
php artisan key:generate
```

Update the required environment variables in `.env`.

### Start Development

```bash
php artisan serve
npm run dev
```

The application will be available at:

```text
http://127.0.0.1:8000
```

---

## Production Deployment

### Environment Variables

Update the following values:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

ASSET_URL=${APP_URL}
```

Configure any additional database, mail, cache, storage, or third-party service credentials as required.

### Build Frontend Assets

```bash
npm install
npm run build
```

### Install Production Dependencies

```bash
composer install --no-dev --optimize-autoloader
```

### Cache Optimization

Run the following commands after deployment:

```bash
php artisan optimize:clear

php artisan statamic:stache:clear
php artisan statamic:stache:warm

php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Storage Link

If required:

```bash
php artisan storage:link
```

---

## Docker Deployment

This project is configured to run inside a Docker container using:

* PHP 8.4 FPM Alpine
* Nginx
* Supervisor
* Composer
* Node.js & NPM

### Build the Image

```bash
docker build -t statamic-website .
```

### Run the Container

```bash
docker run -d \
  --name statamic-website \
  -p 80:80 \
  --env-file .env \
  statamic-website
```

### Docker Build Process

The Docker image automatically:

1. Installs PHP extensions.
2. Installs Composer.
3. Installs Node.js and NPM.
4. Copies application files.
5. Installs frontend dependencies.
6. Builds production assets.
7. Installs Composer dependencies.
8. Generates an application key.
9. Applies file permissions.
10. Validates Nginx configuration.

### Container Management

View logs:

```bash
docker logs -f statamic-website
```

Access the container shell:

```bash
docker exec -it statamic-website sh
```

Restart the container:

```bash
docker restart statamic-website
```

---

## Render Deployment

This application is deployed to Render using Docker.

During the Docker build process, a temporary environment file is created:

```bash
cp .env.example .env
```

This allows Laravel and Statamic build-time commands to execute successfully.

All production environment variables are configured through the Render Dashboard.

### Required Render Environment Variables

```env
APP_NAME=
APP_ENV=production
APP_DEBUG=false
APP_URL=
APP_KEY=

ASSET_URL=${APP_URL}
```

Add any additional variables required for:

* Database connections
* Mail services
* Storage drivers
* Third-party APIs
* Analytics integrations

The runtime environment variables configured in Render override the placeholder values used during the Docker build.

---

## Statamic Maintenance

### Clear and Rebuild Stache

If content updates are not appearing:

```bash
php artisan statamic:stache:clear
php artisan statamic:stache:warm
```

### Full Application Reset

```bash
php artisan optimize:clear
php artisan statamic:stache:clear
php artisan statamic:stache:warm
```

---

## Shared Hosting (cPanel)

If deploying outside Docker and using shared hosting:

Remove the Vite hot file after building assets:

```bash
rm public/hot
```

or delete:

```text
public/hot
```

If this file remains, Laravel may continue attempting to connect to the Vite development server.

---

## Useful Commands

```bash
php artisan optimize:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan statamic:stache:clear
php artisan statamic:stache:warm

php artisan storage:link
```

---

## Favicon Generation

Generate favicon assets using:

https://realfavicongenerator.net/
