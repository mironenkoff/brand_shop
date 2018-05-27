<?php

//include_once __DIR__ . '/vendor/autoload.php';
include_once '../vendor/autoload.php';

$variables = [
	'title' => 'Header',
];

$options = [
	'paths' => [
		'../pug_modules',
	],
];

Phug::displayFile('header', $variables, $options);
