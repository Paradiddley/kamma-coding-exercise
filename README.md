# Kamma interview coding exercise

Code submission for Kamma as part of their interview process using the VILT stack (Vue v3, Inertia.js, Laravel 8/PHP 8.1, TailwindCSS v2).

It was a good exercise to implement this using familiar tools as well as learning Inertia.js as this is the first time using it.

## Setup

The development environment uses [Laravel Sail](https://laravel.com/docs/8.x/sail). No pre-requisite tools required apart from Docker.

Developed using Docker for Mac 4.3.0 (71786). Engine 20.10.11, Compose 1.29.2.

1. Install Composer dependencies

```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

2. Run `./vendor/bin/sail up`

3. When the containers have started run;

```shell
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

4. Then finally run `./vendor/bin/sail artisan migrate`

## Usage

### Part 1

* To view go to [http://localhost/part-one]()

### Part 2

* To view go to [http://localhost/part-two]()
* After submitting the form you can see the mail in MailHog at [http://localhost:8025]()

#### To show whoops

If (god forbid) there's an error, and you wish to see the stacktrace, change `APP_DEBUG` to `true` in the `.env`.

## Tests

Use `./vendor/bin/sail test` to run all tests.

## Improvements/known caveats

* To make form fields and button as reusable components. Even better would be a form builder component that would accept a JSON structure to build the form.
* Better front-end error handling that switches output based on `APP_DEBUG`, so that it shows a 'pretty' message with debug off and exception/stack trace with debug on.
* Implement front-end tests.
* Reset form after submission.
* Prettier error page.
* I ideally wanted queue emails being sent, but it's within a database transaction. I wanted to make sure the email was sent successfully before saving the record.
