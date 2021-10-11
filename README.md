# SEO Tools for Laravel Backpack
Using [artesaos/seotools](https://github.com/artesaos/seotools)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thomascombe/seotools-backpack.svg?style=flat-square)](https://packagist.org/packages/thomascombe/seotools-backpack)
[![Total Downloads](https://img.shields.io/packagist/dt/thomascombe/seotools-backpack.svg?style=flat-square)](https://packagist.org/packages/thomascombe/seotools-backpack)

## Installation

You can install the package via composer:

```bash
composer require thomascombe/seotools-backpack
```

## Usage

``` php
// Add SeoCrud to your Backpack Crud Controller
use SeoCrud;

// and call :
$this->setSeoFields();

// to add default fields
```

``` php
// Add SeoFields to your model
use SeoFields;
```

You can override SEO fields with override `$seoFields`

To create database you can use migration : 
`php artisan vendor:publish --provider="Thomascombe\SeotoolsBackpack\SeotoolsBackpackServiceProvider"`

Add fields in `$fillable` array if you want to save

To set SEO Meta tags :
```php
SEO::setTitle($youModel->{\Thomascombe\SeotoolsBackpack\Models\Interfaces\SeoFieldsInterface::COLUMN_SEO_TITLE});
SEO::setDescription($youModel->{\Thomascombe\SeotoolsBackpack\Models\Interfaces\SeoFieldsInterface::COLUMN_SEO_DESCRIPTION});
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email thomascombe42@gmail.com instead of using the issue tracker.

## Credits

- [Thomas Combe](https://github.com/seotoolsbackpack)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
