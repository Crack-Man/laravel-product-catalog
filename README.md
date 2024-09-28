# Getting Started

**Installing dependencies:**
```bash
docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v "$(pwd):/var/www/html" \
   -w /var/www/html \
   laravelsail/php83-composer:latest \
   composer install --ignore-platform-reqs
```

**Run project containers in the background:**
```bash
./vendor/bin/sail up -d
```

**Perform database migrations:**
```bash
./vendor/bin/sail artisan migrate
```

**Start database seeding:**
```bash
./vendor/bin/sail artisan db:seed
```
