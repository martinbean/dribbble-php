# PHP Wrapper for Dribbble API

The Dribbble PHP API Wrapper is exactly what it says on the tin: it’s a simple wrapper for the Dribbble API for use in your PHP projects.

## Installation

You can either download the latest version of the library, or the preferred way is to install it as a dependency with [Composer](http://getcomposer.org/), a dependency manager for PHP.

### Installing with Composer

To install with Composer, simply add the following to your **composer.json** file:

```json
{
    "require": {
        "martinbean/dribbble-php": "3.*"
    }
}
```

Then run `composer.phar install` from your command line.

## Usage

You can use the wrapper in the traditional, include-and-instantiate-classes method; or (preferably) with Composer.

The API wrapper contains the following methods:

* getShot()
* getShotRebounds()
* getShotComments()
* getShotsList()
* getPlayerShots()
* getPlayerFollowingShots()
* getPlayerLikes()
* getPlayer()
* getPlayerFollowers()
* getPlayerFollowing()
* getPlayerDraftees()

These correspond to the API methods as described on [Dribbble’s API documentation page](http://dribbble.com/api).

As per Dribbble’s documentation, some methods take an optional `id` parameter which can be either a player ID or alpha-numeric username; and some further methods take optional `page` and `per_page` parameters for pagination.

### Responses

All responses from the Dribbble API PHP Wrapper are returned as PHP objects, so you can act on properties directly. If any errors are encountered, then a `Dribbble\Api\Exception` is thrown, which can be caught in a `try`/`catch` block.

An example usage would be:

```php
<?php

require('vendor/autoload.php');

$client = new Dribbble\Api\Client();

try {
    $shots = $client->getPlayerShots('martinbean');
    foreach ($shots->shots as $shot) {
        printf('<li><a href="%s">%s</a></li>', $shot->url, $shot->title);
    }
}
catch (Dribbble\Exception $e) {
    printf('%d: %s', $e->getCode(), $e->getMessage());
}
```

This would fetch mine ([martinbean](http://dribbble.com/martinbean)) shots, but also catch any exceptions should they arise.

## Other notes

The Dribbble API PHP Wrapper was created by [Martin Bean](http://martinbean.co.uk/) and is released under the MIT License.

If you have any issues with the wrapper then please open an [Issue](https://github.com/martinbean/dribbble-php/issues/) on the GitHub project.