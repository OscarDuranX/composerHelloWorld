<?php

require __DIR__ . 'vendor/autoload.php';


$sayhello = new \HelloWorld\SayHello();

echo $sayhello->world();
echo \HelloWorld\SayHello::world();