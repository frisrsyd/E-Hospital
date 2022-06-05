<br>
<p align="center"><img src="public/img/logo-light.png" alt="E-Hospital Logo" width="300"></p>
<br>
## About E-Hospital
<p>E-Hospital is a web application that allows people to have medical portable tool for a time without buy it, just borrow or rent it. The application is designed to be used by people who are in need of medical services.</p>

## Installation

1. clone the repository

```bash
git clone https://github.com/frisrsyd/INF206-2020-A-Kelompok_3-E-Hospital
```

2. go to folder and run

```bash
composer install
```

```bash
composer update
```

3. migrate the table

Copy the contents of `.env.example` file to new `.env` file:

```sh
cp .env.example .env
```

Create an application encryption key:

```sh
php artisan key:generate
```

Create an empty database and fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` fields in the `.env` file to match the credentials of your newly created database.

following the .env file, change `DB_DATABASE = e_hospital`, so make the empty database name is `e_hospital`

Run the migrations:

```sh
php artisan migrate
```

4. run serve with

```bash
php artisan serve
```

## Contact info

if any problem contact whatsapp

```bash
https://api.whatsapp.com/send?phone=6285261297134
```
