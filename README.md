[![Stand With Palestine](https://raw.githubusercontent.com/TheBSD/StandWithPalestine/main/banner-no-action.svg)](https://TheBSD.github.io/StandWithPalestine/)

<div style="text-align: center;">

![Laravel Realtime input](https://banners.beyondco.de/Blade%20Realtime%20Input%20Validation.jpeg?theme=light&packageManager=composer+require&packageName=https%3A%2F%2Fgithub.com%2FYemeni-Open-Source%2Fblade-realtime-input&pattern=architect&style=style_1&description=Enjoy+realtime+input+validation+by+passing+your+rules+in+your+input+itself.&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

![Packagist Downloads](https://img.shields.io/packagist/dt/yemeni-open-source/blade-realtime-input?color=blue&label=Downloads&logo=packagist&logoColor=white)
![Packagist Version](https://img.shields.io/packagist/v/yemeni-open-source/blade-realtime-input?color=green&label=Version&logo=laravel&logoColor=white)
[![GitHub license](https://img.shields.io/github/license/yemeni-open-source/blade-realtime-input)](https://github.com/Yemeni-Open-Source/blade-realtime-input/blob/father/LICENSE)
[![StandWithPalestine](https://raw.githubusercontent.com/TheBSD/StandWithPalestine/main/badges/StandWithPalestine.svg)](https://github.com/TheBSD/StandWithPalestine/blob/main/docs/README.md)

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

## Localization

The library works as you familiar with laravel validator you can read laravel validation localization.

## License

The MIT License (MIT). Please see [MIT license](LICENSE) File for more information.
