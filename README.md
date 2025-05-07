# Flying Logbook
## Prasyarat
Sebelum memulai, pastikan Anda memiliki hal-hal berikut terinstal:
- PHP 8.x+
- Composer
- MySQL
## Instalasi
- Clone repositori ini ke komputer Anda.
    ```language
    git clone https://github.com/NathasyaLP/flying-logbook-cp-stsi4401-18-kelompok1.git
    ```
- Install Dependencies
  Setelah clone repositori, masuk ke direktori project dan install dependencies menggunakan Composer:
  ```language
  cd repository-name
  composer install
  ```
- Konfigurasi File .env
  Salin file .env.example ke .env dan lakukan pengaturan konfigurasi sesuai dengan kebutuhan Anda, seperti database dan JWT secret key.
  ```language
    cp .env.example .env
    ```
- Generate App Key
  Jalankan perintah berikut untuk menghasilkan JWT secret key:
  ```language
    php artisan key:generate
    ```
- Setup Database
  Buat database di MySQL dan update pengaturan database di file .env Anda. Kemudian jalankan migrasi dan seeding (jika ada):
  ```language
    php artisan migrate --seed
  ```
- Jalankan Aplikasi
  ```language
    php artisan serve
  ```
