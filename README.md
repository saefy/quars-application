# Quars App PHP Framework

[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is a Quars Web App, an implementacion with [saefy/quars](https://github.com/saefy/quars/) Framework.

Quars is a PHP Framework. It uses Phroutes/phroutes for routing, blade template engine used in Laravel.

- Database is handled with \Quars\Db\Db
- ActiveRecord library is \Quars\ActiveRecord

## Structure

This is the directory structure you should use for your project. 

```
my_application_example/
  app/
    Cache/
    Config/
    Controllers/
    Errors/
    Helpers/
    Libraries/
    Models/
    Routes/
    Services/
    Views/
    boostrap/
    public/
vendor/
```

## Install

Clone or download this repository. Your application will be on _application_example_ folder but you can rename it to yours project name.

Install packages via Composer

``` bash
$ composer install
```

Run your app 

``` bash
$ sh quars_serve <application_folder_name>
```
This will launch your app on localhost http://127.0.0.1:9900

Note: quars_serve is for dev purposes only, don't use it in prod environments.

## Deploy to production
Apache Server with PHP 7.* (required)

You can setup the project on production server by just pointing your domain.com to public/ directory and your app will be online, enjoy :).

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email mmendoza000@gmail.com instead of using the issue tracker.

## Credits

- [Miguel Mendoza C.][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/saefy/quars.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/saefy/quars/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/saefy/quars.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/saefy/quars.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/saefy/quars.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/saefy/quars
[link-travis]: https://travis-ci.org/saefy/quars
[link-scrutinizer]: https://scrutinizer-ci.com/g/saefy/quars/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/saefy/quars
[link-downloads]: https://packagist.org/packages/saefy/quars
[link-author]: https://github.com/mmendoza000
[link-contributors]: ../../contributors
