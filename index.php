<?php
namespace Lib;
require_once 'vendor/autoload.php';


$calc = new Demo(5,10);


echo $calc->getSum();