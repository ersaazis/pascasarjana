## Cara INSTALL
1. git clone https://github.com/ersaazis/pascasarjana
2. cd pascasarjana
3. composer install
4. cp .env.example .env
5. sesuaikan file .env
6. php artisan key:gen
7. php artisan migrate --seed

## Cara Menjalankan
1. php artisan serve // untuk menjalankan server (127.0.0.1)
2. php artisan queue:work database --queue=commands // untuk menjalankan proses dibackgroud

## Akun
username : ersaazis24m@gmail.com
passwod  : ersaazis