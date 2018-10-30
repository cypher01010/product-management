### SIMPLE PRODUCT MANAGEMENT

URL: http://104.129.16.19/pms/web/

Configuration:

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```
### File Upload

Edit the file 'config/params.php'
```php
return [
    'adminEmail' => 'admin@example.com',
    'uploadPath' => '/var/www/html/basic/web/uploads/',
    'imgUrl' => 'http://basic.local/uploads/',
];
```

