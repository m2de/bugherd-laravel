# Bugherd Installation Helper for Laravel

A Laravel Helper package to install the [Bugherd](https://www.bugherd.com/) script

## Installation

```sh
composer require m2de/bugherd-laravel
```

Add your Bugherd project ID to your .env or the bugherd.php config.

```sh
# .env
BUGHERD_PROJECT_KEY=abcdef123456gh
```

## Usage

Inside your layout or blade template add the blade helper where you want to publish the bugherd installation script.

```php
// resources/views/layouts/default.blade.php

<head>
...
@bugherd
</head>
```

## Configuration

By default the Bugherd script will only output in `staging` environments, however you can customise this in the config of this package.

You may publish the config and views to customise them if required.
