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

$dt = my_create_datetime();
assert($dt instanceof \DateTime);
$x = $dt->setDate(2112, 9, 3);
var_dump($dt, $x);

/**
 * @return \DataTimeInterface
 */
function my_create_datetime()
{
    if (false) {
        $v = [1, 2, 3];
        $x = 1 + $v;
        return $v;
    }

    return new \DateTimeImmutable;
}
