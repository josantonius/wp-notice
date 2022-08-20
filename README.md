# PHP WordPress Notice

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp-notice/v/stable)](https://packagist.org/packages/josantonius/wp-notice)
[![License](https://poser.pugx.org/josantonius/wp-notice/license)](LICENSE)

[Versión en español](README-ES.md)

Display notices in WordPress administration panel.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **WP_Notice library**, simply:

    composer require josantonius/wp-notice

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    composer require josantonius/wp-notice --prefer-source

You can also **clone the complete repository** with Git:

    git clone https://github.com/josantonius/wp-notice.git

Or **install it manually**:

[Download WP_Notice.php](https://raw.githubusercontent.com/josantonius/wp-notice/master/src/class-wp-notice.php):

    wget https://raw.githubusercontent.com/josantonius/wp-notice/master/src/class-wp-notice.php

## Available Methods

Available methods in this library:

### - Generate success notice

```php
WP_Notice::success($message, $dismissable);
```

| Atttribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $message | Notice message. | string | Yes | |
| $dismissable | Dimissable notice. | boolean | No | true |

**@return** (boolean true)

### - Generate warning notice

```php
WP_Notice::warning($message, $dismissable);
```

| Atttribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $message | Notice message. | string | Yes | |
| $dismissable | Dimissable notice. | boolean | No | true |

**@return** (boolean true)

### - Generate error notice

```php
WP_Notice::error($message, $dismissable);
```

| Atttribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $message | Notice message. | string | Yes | |
| $dismissable | Dimissable notice. | boolean | No | true |

**@return** (boolean true)

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP_Notice;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/class-wp-notice.php';

use Josantonius\WP_Notice\WP_Notice;
```

## Usage

Example of use for this library:

### - Generate success notice

```php
WP_Notice::success('Success example');
WP_Notice::success('Success not dismissable', false);
```

### - Generate warning notice

```php
WP_Notice::warning('Warning example');
WP_Notice::warning('Warning not dismissable', false);
```

### - Generate error notice

```php
$error = new \WP_Error('error', 'Example of error creation from WP_Error');

WP_Notice::error($error);
WP_Notice::error('Example of error creation without going through WP_Error');
WP_Notice::error('Error not dismissable', false);
```

![image](resources/images/english-notices.png)

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/josantonius/wp-notice.git
    
    cd WP_Notice

    bash bin/install-wp-tests.sh wordpress_test root '' localhost latest

    composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    composer phpunit

Run [WordPress](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius#contact)
