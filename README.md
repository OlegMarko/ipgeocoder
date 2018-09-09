<p align="center">Laravel IP Geocoder</p>

<p align="center">
<a href="https://packagist.org/packages/fixik/ipgeocoder"><img src="https://poser.pugx.org/fixik/ipgeocoder/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/fixik/ipgeocoder"><img src="https://poser.pugx.org/fixik/ipgeocoder/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/fixik/ipgeocoder"><img src="https://poser.pugx.org/fixik/ipgeocoder/license.svg" alt="License"></a>
</p>

## Installation

`composer require fixik/ipgeocoder`

## Basic Usage

```php
$ip_info = new Fixik\Geocode\IpGeocode();
$ip_info->get('1.1.1.1');
```

## License

Laravel IP Geocoder is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
