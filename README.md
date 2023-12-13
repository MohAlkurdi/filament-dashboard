# Filament Dashboard

A demo application to perform crud operations

## Installation

Clone the repo locally:

```sh
git clone https://github.com/MohAlkurdi/filament-dashboard.git filament-dashboard && cd filament-dashboard
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit
`http://localhost:8000/admin/login`
in your browser, and login with:

-   **Username:** admin@morph.com
-   **Password:** password
