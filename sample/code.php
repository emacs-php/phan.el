<?php

/**
 * Sample code for phan.el
 *
 * ## How to run this script
 *
 *     $ php --php-ini=$PWD/sample/php.ini ./sample/code.php
 *
 * @copyright 2017 Baguette HQ
 * @author    USAMI Kenta <tadsan@zonu.me>
 */

namespace Emacs\PhanEl;

error_reporting(0);

$dt = my_create_datetime([], $foo);
assert($dt instanceof \DateTime);
$x = $dt->setDate(2112, 9, 3);
var_dump($dt, $x);
$uid = getUserId([] + []);

deprecated();

/**
 * @param  int $num
 * @return \DataTimeInterface
 */
function my_create_datetime($num)
{
    if (false) {
        $v = [1, 2, 3];
        $x = 1 + $v + $z;
        $w = split(",", "1,2,3");
        echo HOGE . FooBar::Foo;
        FooBar\Buz(getUserId());

        return $v;
    }

    return new \DateTimeImmutable;
}

/** @deprecated */
function obsolete() {}

/**
 * @param  Hoge $name
 * @return int
 */
function getUserId($string) { return [1]; }
