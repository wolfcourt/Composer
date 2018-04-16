<?php
/**
 * Created by PhpStorm.
 * User: wilder11
 * Date: 09/04/18
 * Time: 15:11
 */
require '../vendor/autoload.php';

use App\Wcs\Hello;

$hello = new Hello();
$hey = new \HelloWorld\SayHello();

echo $hello->talk();
echo $hey->world();