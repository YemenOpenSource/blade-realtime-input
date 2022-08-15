<div style="text-align: center;">

![Packagist Downloads](https://img.shields.io/packagist/dt/yemeni-open-source/blade-realtime-input?color=blue&label=Downloads&logo=packagist&logoColor=white)
![Packagist Version](https://img.shields.io/packagist/v/yemeni-open-source/blade-realtime-input?color=green&label=Version&logo=laravel&logoColor=white)
[![GitHub license](https://img.shields.io/github/license/yemeni-open-source/blade-realtime-input)](https://github.com/Yemeni-Open-Source/blade-realtime-input/blob/father/LICENSE)
</div>

# Laravel Realtime input

Enjoy realtime input validation by passing your rules in your input itself.

## Requirments

This package is tested with Laravel v8 and it should work on Laravel v7 and v9

|||
|-|-|
|php| ^7.4 &#124; ^8.0| &#124; ^8.1
|Composer| ^2.3|
|Laravel| ^8.0 &#124; ^9.0|

## Installation

Install the package by using composer:

```bat
composer require yemeni-open-source/blade-realtime-input
```

## Basic Usage

The `<input>` tag:

```blade
<x-realtime-input::strings name="username" rules="required|min:5" />
```

The `<select>` tag:

```blade
<x-realtime-input::options 
    rules="in:usd,yer"
    class="btn btn-default custom-select"
    name="currency" id="currency"
    >
    <option value="usd">USD</option>
    <option value="yer" selected>YER</option>
    <option value="sar">SAR</option>
</x-realtime-input::options>
```

## Advance Usage

You can add ```id```, ```class``` , ```type``` or other HTML attributes to your input like following

```blade
<x-realtime-input::strings
    rules="required|min:5"
    name="username"
    id="user"
    class="form-control"
    />
```

You can add array name like following

```blade
<x-realtime-input::strings
    name="username[]"
    rules="required|min:5"
    id="user"
    class="form-control"
    />
```

So to add ```class="form-control"``` it should be ```class="form-control"```

Note the colon ```:``` before the attribute and the single quotation ```"''"``` inside the double quotation

## Localization

The library works as you familiar with laravel validator you can read laravel validation localization.

## License

The MIT License (MIT). Please see [MIT license](LICENSE) File for more information.
