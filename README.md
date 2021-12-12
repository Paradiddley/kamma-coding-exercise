# Kamma interview coding exercise

## Setup

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
