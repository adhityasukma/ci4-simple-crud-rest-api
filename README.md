# Simple CRUD Rest API
Simple CRUD Rest API using Codeigniter 4

## Table: coupons
Field table:
1. id: INT, 5, auto_increment
2. title: VARCHAR, 100
3. code_coupon: VARCHAR, 100

## Requirement:
1. Install Git https://git-scm.com/downloads
2. Install Composer https://getcomposer.org/download/
3. Install Postman https://www.postman.com/downloads/

## Konfigurasi file .env
Buka folder *ci4-simple-crud-rest-api* kemudian edit file **.env** mengunakan editor seperti Visual Studio Code (VSCode) atau Sublime Text.
Lalu cari baris _DATABASE_ kemudian edit baris berikut disesuaikan dengan konfigurasi database / phpmyadmin punya kalian seperti: hostname, database, username dan password.
```
database.default.hostname = localhost
database.default.database = ci4_simple_crud_api
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

## Database
Buka phpmyadmin kemudian buat database baru, contoh database yaitu ci4_simple_crud_api

## Instalasi & Cara gunakan App
Buka folder *ci4-simple-crud-rest-api* lalu jalankan terminal / gitbash / Command Prompt (CMD) kemudian jalankan perintah berikut:
```
composer update
php spark migrate
php spark serve
```

## Untuk menggunakan Simple CRUD Rest API kemudian buka aplikasi Postman
Ada beberapa Method yang bisa digunakan di postman diantaranya sebagai berikut:

### Get all data Coupon

- Response Method: **GET**
- Request URL: http://localhost:8080/coupon

Contoh response result:
```
[
    {
        "id": "3",
        "title": "Diskon 10%",
        "code_coupon": "DiskonPertama"
    }
]
```
Contoh response result jika data tidak ada:
```
{
    "status": 404,
    "error": 404,
    "messages": {
        "error": "Data tidak ditemukan"
    }
}
```

### Get data Coupon by id
- Response Method: **GET**
- Request URL: http://localhost:8080/coupon/3

Contoh response result:
```
{
    "id": "3",
    "title": "Diskon 10%",
    "code_coupon": "DiskonPertama"
}
```
Contoh response result jika data tidak ada:
```
{
    "status": 404,
    "error": 404,
    "messages": {
        "error": "Data tidak ditemukan"
    }
}
```
### Create data Coupon JSON Object
- Response Method: **POST**
- Request URL: http://localhost:8080/coupon/3
- Body >> raw type JSON

Contoh JSON Object
```
{
    "title":"Kupon Murah",
    "code_coupon":"Kupon10rb"
}
```
Contoh response result {last_insert_id}:
```
contoh: 4
```
Contoh response result jika fail:
```
{
    "status": 400,
    "error": 400,
    "messages": {
        "error": "Data gagal disimpan"
    }
}
```

### Update data Coupon JSON Object
- Response Method: **POST**
- Request URL: http://localhost:8080/coupon/3
- Body >> raw type JSON

Contoh JSON Object
```
{
    "title":"Kupon Murah 10rb",
    "code_coupon":"Kupon10rbMurah"
}
``` 
Contoh response result:
```
true 
``` 
Contoh response result jika fail:
```
{
    "status": 400,
    "error": 400,
    "messages": {
        "error": "Data gagal diupdate"
    }
}
``` 
Contoh response result jika data tidak ditemukan:
```
{
    "status": 404,
    "error": 404,
    "messages": {
        "error": "Data tidak ditemukan"
    }
}
```

### Delete data Coupon
- Response Method: DELETE
- Request URL: http://localhost:8080/coupon/4

Contoh response result:
```
{
    "id": "4",
    "Pesan": "Data berhasil dihapus"
}
```
Contoh response result jika data tidak ditemukan:
```
{
    "status": 404,
    "error": 404,
    "messages": {
        "error": "Data tidak ditemukan"
    }
}
```
