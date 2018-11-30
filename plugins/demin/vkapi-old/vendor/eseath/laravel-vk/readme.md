# Laravel VK

A Laravel package for working with vk.com API.

You need to create an application [https://vk.com/editapp?act=create](https://vk.com/editapp?act=create).

## Requirements

* PHP 7;
* Laravel 5.2 or later.

## Installation

1\. Run command:

```
composer require eseath/laravel-vk
```

2\. Open up `/config/app.php` and add the service provider to `providers` array:

```php
'providers' => [
    Eseath\VK\VKServiceProvider::class,
]
```

3\. Add the alias:

```php
'aliases' => [
    'VK' => Eseath\VK\Facades\VK::class,
]
```

## Configuration

Run `php artisan config:publish` and modify the config file with your own informations.

You can also specify the parameters in the file `.env`:

```
VK_APP_ID       = 
VK_APP_SECRET   = 
VK_ACCESS_TOKEN = 
VK_REDIRECT_URI = 
VK_API_VERSION  = 
```

## Methods

`exec(method : string, [params : array])`

Calling API method.

```php
$user = VK::exec('users.get', ['user_id' => 64610544]);

echo $user->first_name;
```

See the list of available methods [vk.com/dev/methods](https://vk.com/dev/methods).

---

`getAuthURL([params : array])`

Getting the authentication URL.

See the list of available parameters [vk.com/dev/authcode_flow_group](https://vk.com/dev/authcode_flow_group).

---

`getAccessToken(code : string, [redirect_uri : string])`

Getting the access token.

See [vk.com/dev/access_token](https://vk.com/dev/access_token?f=1.%20User%20Token).

---

`setAccessToken(access_token : string)`

Setting the access token.