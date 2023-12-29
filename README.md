# Test 1
php test1.php 1 3 5 7 9

# Test 2
php test2.php 1 2 3 4 5

# Test 3
php test3.php -4 3 -9 0 4 1

# Test 4
- cd test-be
- cp .env.example .env
- composer install
- php artisan migrate
- php artisan test (for unit test auth)

**Register**
```
curl --location 'http://test-be.test/api/auth/register' \
--header 'Content-Type: application/json' \
--data-raw '{
    "name": "yoga",
    "email": "yoga@mail.com",
    "password": "password"
}'
```
**Response**
```
{
    "status": true,
    "message": "User Created Successfully",
    "token": "2|I6Ck3JD6DmLTuQlyzupX90KZaJE5a58rv86IW6Jp"
}
```
**Login**
```
curl --location 'http://test-be.test/api/auth/login' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--data-raw '{
    "email": "yoga@mail.com",
    "password": "password"
}'
```
**Response**
```
{
    "status": true,
    "message": "User Logged In Successfully",
    "token": "3|gtHqN9CCFrfWEutV7G29DCnfxdwJld4CP1s9iUen"
}
```

**GET USER**
```
curl --location 'http://test-be.test/api/user' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer 3|gtHqN9CCFrfWEutV7G29DCnfxdwJld4CP1s9iUen'
```
**Response**
```
{
    "id": 3,
    "name": "yoga",
    "email": "yoga@mail.com",
    "email_verified_at": null,
    "created_at": "2023-12-29T03:06:28.000000Z",
    "updated_at": "2023-12-29T03:06:28.000000Z"
}
```

