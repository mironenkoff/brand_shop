<?php

//include_once __DIR__ . '/vendor/autoload.php';
include_once '../vendor/autoload.php';

Phug::display('p=$message', [
  'message' => 'Hello',
]);
