<?php

require '../vendor/autoload.php';

$helloHello = new \App\Wcs\Hello();
var_dump($helloHello);

$helloEhime = new HelloWorld\SayHello();
var_dump($helloEhime);

echo $helloHello->talk();
echo "<br/>";
echo $helloEhime->world();
