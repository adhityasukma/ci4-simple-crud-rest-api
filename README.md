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

## Instalasi & Cara gunakan App
Buka terminal / gitbash / Command Prompt (CMD) lalu jalankan perintah berikut:
```
composer install
php spark migrate
php spark serve
```

## Postman
### Get all data Coupon

- Response Method: **Get**
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
