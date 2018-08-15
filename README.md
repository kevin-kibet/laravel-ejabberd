#  Ejabberd API wrapper for Laravel/Lumen 5.*
[Ejabberd API](https://docs.ejabberd.im/developer/ejabberd-api/)

## Installation
```
composer require kevin-kibet/laravel-ejabberd
```
## Configuration
You can publish the configuration file using this command

$ php artisan vendor:publish --provider="Ejabberd\Providers\EjabberdServiceProvider"
```php
<?php

return [
    'api' => env('EJABBERD_API', 'http://im.conversations.com/api'),
    
    'domain' => env('EJABBERD_DOMAIN', 'conversations.com'),
    'conference_domain' => env('EJABBERD_CONFERENCE_DOMAIN', 'conference.conversations.com'),
    'user' => env('EJABBERD_USER', 'admin'),
    'password' => env('EJABBERD_PASSWORD', 'password'),
    'debug' => env('EJABBERD_DEBUG', true)
];
```

### Laravel
Register the service provider: In your config/app.php
```php
'providers' => [
    // Other Service Providers

    Ejabberd\Providers\EjabberdServiceProvider::class
],
```

### Lumen
To load the configuration, in your bootstrap/app.php
```php
$app->configure('ejabberd')
```
Register the service provider
```php
$app->register(Ejabberd\Providers\EjabberdServiceProvider::class);
```
## Examples

#### Create user
Register a new user to your xmpp server
```php
$create_user = new CreateUser($user, $password, $host);
$response = Ejabbered::createUser($create_user);
```

#### Send message
Send message to a user or conference
```php
$send_message = new SendMessage($type, $from, $to, $subject, $body);
$response = Ejabbered::sendMessage($send_message);
```