# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/processton-io/processton grid-list.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton grid-list)
[![Total Downloads](https://img.shields.io/packagist/dt/processton-io/processton-grid-list.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-grid-list)
![GitHub Actions](https://github.com/processton-io/processton-grid-list/actions/workflows/main.yml/badge.svg)

Generate Grid for processton client

## Installation

You can install the package via composer:

```bash
composer require processton-io/processton-grid-list
```

## Usage
### generateGrid
```php
ProcesstonGridList::generateGrid(
    $title, 
    $items,
    $icon,
    $subTitle,
    $attachments,
    $actions,
    $width,
    $name
)
```
### generateGridData
```php
ProcesstonGridList::generateGridData(
    $title,
    $subtitle,
    $items,
    $actions,
)
```
### generateGridItem
```php
ProcesstonGridList::generateGridItem(
    $title,
    $subtitle,
    $type,
    $icon,
    $image,
    $link,
    $actions,
    $width,
)
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmadkokab@gmail.com instead of using the issue tracker.

## Credits

-   [Ahmad Faryab Kokab](https://github.com/processton)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
