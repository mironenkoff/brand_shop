<?php

//include_once __DIR__ . '/vendor/autoload.php';
include_once '../vendor/autoload.php';

$variables = [
	'title' => 'MainPage',
];

$options = [
	'paths' => [
		__DIR__,
	],
];

Phug::displayFile('index.jade', $variables, $options);
