<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Tentang
- Merupakan aplikasi back-end Sistem untuk menyimpan Task & SubTask dengan menggunakan framework Laravel dan Penyimpanan MongoDB.

# Setup
- Buka direktori project di terminal anda.
- Ketik command : copy .env.example .env (copy paste file .env.example).
- Ketik command dibawah ini:
	- composer install
	- php artisan optimize:clear
	- php artisan key:generate (generate app key)
- Periksa kembali setting MongoDB apa sudah sesuai atau belum:
  - Instal jenssengers/mongodb jika belum terinstal (composer require jenssegers/mongodb:^3.8) 
  - Periksa providers di config/app.php (Jenssegers\Mongodb\MongodbServiceProvider::class,)
  - Periksa database mongoDB apakah sudah terdaftar di config/database.php 
  - Periksa apakah PHP sudah terintegrasi dengan mongoDB, jika belum buka link (https://pecl.php.net/package/mongodb/1.13.0/windows)
  - Periksa environment (.env) apakah sudah menggunakan database mongoDB
  - Tambahkan extension=mongodb di php.ini jika belum ada
- Instal dan lakukan regis pada Postman Desktop
- Ketik command dibawah ini:
    - php artisan migrate (migrasi database)
    - php artisan db:seed
    - php artisan serve
- Selanjutnya masukkan request api http://127.0.0.1:8000/task/{sesuai-action-yang-tertera} dan methodnya.

# Author
- Muhammad Mukhlish Syarif




<p align="center"><b> ~ TERIMA KASIH ~ </b></p>
