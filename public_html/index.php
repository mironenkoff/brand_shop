<?php

require_once '../my_php/config.php';
require '../my_php/model.php';

$db = dbConnect( $dsn, $user, $password );

//print_r( getCategories( $db ) );
include '../my_php/views/view.php';
