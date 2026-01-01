# Laravel Utils

A collection of enums, guidelines, and static helper classes for Laravel projects.

## Installation

You can install the package via composer:

```bash
composer require danielpetrica/laravel-utils
```

## Usage

This package provides static helpers and enums.

### Helpers

```php
use DanielPetrica\LaravelUtils\Helpers\SomeHelper;

SomeHelper::doSomething();
```

### Enums
 
```php
use DanielPetrica\LaravelUtils\Enums\TTLEnum;
 
TTLEnum::OneHour->value; // 3600
TTLEnum::OneHour->getSeconds(); // 3600
```

## Guidelines

Guidelines can be found in the `.ai/guidelines` directory.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
