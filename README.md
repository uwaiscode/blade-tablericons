# Blade Tableicons


A package to easily make use of [Tablericons](https://tablericons.com/) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [tablericons.com](https://tablericons.com/).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require uwaiscode/blade-tablericons
```

## Configuration

Blade Tablericons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-tablericons.php` config file:

```bash
php artisan vendor:publish --tag=blade-tablericons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-tablericon-home/>
```

You can also pass classes to your icon components:

```blade
<x-tablericon-home class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-tablericon-home style="color: #555"/>
```
