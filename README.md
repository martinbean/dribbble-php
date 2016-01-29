# PHP Wrapper for Dribbble API

## Installation

```
$ composer require "martinbean/dribbble-php=4.*"
```

## Usage

Instantiate the client:

```php
$client = new Dribbble\Client;
```

Set the access token if you have one:

```php
$client->setAccessToken('Your access token');
```

Perform requests against [Dribbble’s API](http://developer.dribbble.com/v1/):

```php
try {
    $response = $client->makeRequest('/user', 'GET');
} catch (Exception $e) {
    print $e->getMessage();
}
```

The client will either return an `object`, or throw one of the following exceptions:

* `Dribbble\Exception\BadRequestException`
* `Dribbble\Exception\TooManyRequestsException`
* `Dribbble\Exception\UnauthorizedException`
* `Dribbble\Exception\UnprocessableEntityException`

Dribbble’s API is rate-limited. If you exceed the limit, a `TooManyRequestsException` will be raised.

If you try to access a URI that requires authentication and you haven’t supplied an access token, then a `UnauthorizedException` will be raised.

`UnprocessableEntityException` refers to a validation error. You can fetch an array of the failed validation rules with the `getErrors()` method on the class:

```php
try {
    // Make request with data that fails validation
} catch (UnprocessableEntityException $e) {
    $errors = $e->getErrors();
}
```

## License

Licensed under the [MIT License](LICENSE.md).

## Issues

Please report to: https://github.com/martinbean/dribbble-php/issues
