# GeoServer REST API For Laravel / Yii2 / PHP

This PHP library provides programmatic functions to access a [GeoServer](http://geoserver.org/).

It is Free and Open Source Software. All contributions are most welcome. Learn more about.

#### Features

* Support for [Yii2](./docs/usage.md#yii2), [Laravel](./docs/usage.md#laravel) 
* Obtain the [version](./docs/usage.md#get-the-geoserver-version) of the connected GeoServer instance
* [Create / Update / Delete workspace](./docs/usage.md#workspace) or retrieve existing workspace details
* [Create / Update / Delete datastores](./docs/usage.md#data-stores) and listing them
* [Create coveragestores](./docs/usage.md#coverage-stores) and listing them
* [Upload files](./docs/usage.md#uploading-geographic-files) in various [formats](#supported-file-formats)
* [Manage styles](./docs/usage.md#styles) in SLD format

For detailed information of each of the provided functions check out the [documentation on the usage](./docs/usage.md).

#### Requirements

* [PHP 7.1](http://www.php.net/) or above.
* [GeoServer](http://geoserver.org/) 2.13.0 or above

## Installation

The GeoServer REST API uses [Composer](http://getcomposer.org/) to manage its dependencies.

```bash
composer require lumbunginov/geoserver-rest-api-laravel
```

## Supported file formats

The library handles:

* `Shapefile`
* `Shapefile` inside `zip` archive
* `GeoTIFF`
* `GeoPackage` format version 1.2 (can contain both vector and raster data, but will be reported as vector)
* Styled Layer Descriptor `SLD` files for layer styles in XML format

Read more on [supported file formats and encoding](./docs/supported-files.md).

## <a name="roadmap"></a>Roadmap

Here's the TODO list for the next release.
* [ ] Upload style via sld content
* [ ] Working with WPS, WFS, WMS
* [ ] Setting WPS, WFS, WMS


## Credits

This repository is forked from [ttungbmt/geoserver-rest-api](https://github.com/ttungbmt/geoserver-rest-api). Special thanks to the original author for creating this excellent GeoServer REST API library.

The original package is inspired by [OneOffTech/geoserver-client-php](https://github.com/OneOffTech/geoserver-client-php). Huge thanks goes to OneOffTech [OneOffTech/geoserver-client-php](https://github.com/OneOffTech/geoserver-client-php) for their amazing work!

## License

This project is Free and Open Source Software, licensed under the [MIT license](./LICENSE.txt).

