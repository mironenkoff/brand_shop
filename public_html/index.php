<?php

require '../my_php/config.php';
require '../my_php/model.php';

$db = dbConnect( $dsn, $user, $password );
session_start();
doFeedbackAction($db);

