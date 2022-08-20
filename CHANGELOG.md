# CHANGELOG

## 2022-08-20

* The repository was archived.

## 1.0.2 - 2018-01-07

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

* Implemented `WordPress PHPCS code standard` from all library PHP files.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

## 1.0.1 - 2017-10-14

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with `Travis CI` to implement continuous integration.

* Added `WP_Notice/src/bootstrap.php` file

* Added `WP_Notice/tests/bootstrap.php` file.
* Added `WP_Notice/tests/sample-plugin.php` file.

* Added `WP_Notice/phpunit.xml.dist` file.
* Added `WP_Notice/_config.yml` file.
* Added `WP_Notice/.travis.yml` file.

* Added `WP_Notice/bin/install-wp-tests.sh` file.

* Added `Josantonius\WP_Notice\Test\NoticeTest` class.
* Added `Josantonius\WP_Notice\Test\NoticeTest->setUp()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticeSuccessDimissable()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticeSuccessNotDimissable()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticeWarningDimissable()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticeWarningNotDimissable()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticeErrorDimissable()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticeErrorFromWP_Error()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticeErrorNotDimissable()` method.
* Added `Josantonius\WP_Notice\Test\NoticeTest->testNoticesPrinted()` method.

## 1.0.0 - 2017-03-21

* Added `Josantonius\WP_Notice\WP_Notice` class.
* Added `Josantonius\WP_Notice\WP_Notice::__callstatic()` method.
* Added `Josantonius\WP_Notice\WP_Notice::display()` method.
