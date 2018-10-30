# Introduction

This is an example of a product management application which I developed using Yii Framework 2.0. I used this framework since I'm familiar with this. The steps needed to setup the solution and dependencies are shown below. I was able to finish this application for approximately 10-12 hours. I'm using Gii extension to speed up the development. 

You can visit this url http://104.129.16.19/pms/web/ for the demo.


# Installation
Clone with `git` 

```shell
$ git clone git@github.com:cypher01010/product-management.git <target-directory>
```
### Database Config

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
### File Upload Config

Edit the file `config/params.php`
```php
return [
    'uploadPath' => '/var/www/html/basic/web/uploads/',
    'imgUrl' => 'http://basic.local/uploads/',
];
```

