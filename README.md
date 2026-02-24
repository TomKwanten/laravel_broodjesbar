# Laravel Broodjesbar

Een leerproject gebouwd in Laravel waarbij een eenvoudige broodjesbar wordt beheerd.

Dit project is gemaakt om Laravel (MVC, routing, Eloquent, Blade, REST) beter te begrijpen.

---

## Functionaliteiten

- Overzicht van alle broodjes\
- Broodje toevoegen\
- Broodje aanpassen\
- Broodje verwijderen\
- Broodje bestellen\
- Overzicht van bestellingen

---

## Technologieën

- Laravel\
- PHP\
- MySQL\
- Blade templating\
- Bootstrap 5

---

## Installatie

1\. Clone de repository

```bash\
git clone https://github.com/TomKwanten/laravel_broodjesbar.git
```

2.  Ga naar de projectmap

```bash\
cd laravel_broodjesbar
```

3.  Installeer dependencies

```bash\
composer install
```

4.  Maak een `.env` bestand

```bash\
cp .env.example .env
```

5.  Stel je database in in `.env`

```bash\
DB_DATABASE=broodjesbar_laravel\
DB_USERNAME=root\
DB_PASSWORD=
```

6.  Genereer application key

```bash\
php artisan key:generate
```

7.  Run migrations

```bash\
php artisan migrate
```

8.  Start de server

```bash\
php artisan serve
```

Ga naar:

```bash\
http://127.0.0.1:8000
```

* * * * *

Wat ik geleerd heb
---------------------

-   RESTful routing in Laravel

-   Route model binding

-   Eloquent relaties (hasMany / belongsTo)

-   Form validation

-   Blade layouts

-   CRUD implementatie

* * * * *

Auteur
------------

Tom Kwanten\
Leerproject -- Laravel
