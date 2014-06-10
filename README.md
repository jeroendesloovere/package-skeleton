# :package_title
[![Build Status](http://img.shields.io/travis/jeroendesloovere/:package_name.svg)](https://travis-ci.org/jeroendesloovere/:package_name)
[![Total Downloads](http://img.shields.io/packagist/dm/jeroendesloovere/:package_name.svg)](https://packagist.org/packages/jeroendesloovere/:package_name)
[![Latest Stable Version](http://img.shields.io/packagist/v/jeroendesloovere/:package_name.svg)](https://packagist.org/packages/jeroendesloovere/:package_name)
[![License](http://img.shields.io/badge/license-MIT-lightgrey.svg)](https://github.com/jeroendesloovere/:package_name/blob/master/LICENSE)

> :package_api_description

:package_description

## Installing

### Using Composer

When using [Composer](https://getcomposer.org) you can always load in the latest version.
Add the :package_name package to your `composer.json` file.

``` json
{
    "require": {
        "jeroendesloovere/:package_name": "1.0.*"
    }
}
```
Check [in Packagist](https://packagist.org/packages/jeroendesloovere/:package_name).

### Usage example

``` php
use JeroenDesloovere\Skeleton;

$skeleton = new Skeleton();
echo $skeleton->echoPhrase('Hello, World!');

```
Check [the :package_title source](/src/) or [view all examples](/examples/example.php).

### Testing

``` bash
$ phpunit
```

## Documentation

The class is well documented inline. If you use a decent IDE you'll see that each method is documented with PHPDoc.


## Contributing

Contributions are **welcome** and will be fully **credited**.

### Pull Requests

> To add or update code

- **Coding Syntax** - Please keep the code syntax consistent with the rest of the package.
- **Add unit tests!** - Your patch won't be accepted if it doesn't have tests.
- **Document any change in behavior** - Make sure the README and any other relevant documentation are kept up-to-date.
- **Consider our release cycle** - We try to follow [semver](http://semver.org/). Randomly breaking public APIs is not an option.
- **Create topic branches** - Don't ask us to pull from your master branch.
- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.
- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

### Issues

> For bug reporting or code discussions.

More info on how to work with GitHub on help.github.com.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](https://github.com/jeroendesloovere/:package_name/contributors)

## License

The module is licensed under [MIT](./LICENSE.md). In short, this license allows you to do everything as long as the copyright statement stays present.