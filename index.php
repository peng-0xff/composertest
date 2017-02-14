<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/14
 * Time: 15:43
 */
require 'vendor/autoload.php';

use fruit\apple\apple;
use fruit\banana\banana;
use fruit\grape\grape;
use fruit\apple\hope;

$apple=new apple();
$apple->color();
$banana=new banana();
$banana->color();
$grape=new grape();
$grape->color();
$end=new hope();
$end->put();
