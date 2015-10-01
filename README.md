# Test of Phpunit VW Extension

[![Build Status](https://travis-ci.org/kenjis/phpunit-vw-test.svg?branch=master)](https://travis-ci.org/kenjis/phpunit-vw-test)

*Phpunit VW Extension* is a awesome tool. It automatically detects CI environments and makes your test suites succeed even with failing assertions or unwanted exceptions!!

## Requirements

* PHP 5.4+

## How to Confirm

Install this repository.

~~~
$ git clone https://github.com/kenjis/phpunit-vw-test.git
$ cd phpunit-vw-test
$ composer install
~~~

Run phpunit and make sure the tests fails.

~~~
$ ./vendor/bin/phpunit
~~~

Then, see [travis-ci](https://travis-ci.org/kenjis/phpunit-vw-test).
Yes! The build is always passing.

## References

* https://github.com/hmlb/phpunit-vw
* https://github.com/koriym/PHP.Skeleton
