<?php

require_once "vendor/autoload.php";

use \Brabadan\Test\SkeletonClass;

$class = new SkeletonClass();

echo $class->echoPhrase("Оно работает! - 1");
