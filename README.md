# Website SiBook
- Nama : M. Basri
- NIM : 1810817210012\
Sebuah situs pusat buku dan materi pelajaran.\
Website ini dibuat untuk pembelajaran mata kuliah Web Framework.

## Requirements
- [PHP][1] >= 7.3
- [Composer][2]

## Installation
1. Clone repository ini dengan menggunakan command berikut:
```
git clone https://github.com/basri27/websibook.git
```
2. Ubah file ```.env.example ``` menjadi ```.env``` dan sesuaikan dengan database yang dibuat.

3. Install depensi PHP dengan menggunakan command berikut:
```
composer install
```
4. Generate app key baru dengan menggunakan command berikut:
```
php artisan key:generate
```
5. Persiapkan database yang akan digunakan dengan menggunakan command berikut:
```
php artisan migrate
```
6. Jalankan website yang dibuat secara lokal dengan menggunakan command berikut:
```
php artisan serve
```

[1]: https://www.php.net "PHP"
[2]: https://www.getcomposer.org "Composer"
