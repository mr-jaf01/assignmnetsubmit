<?php

$DB_HOST = '127.0.0.1';
$DB_USER = 'root';
$DB_PASS =  '';
$DB_NAME = 'assignment';

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) or die('con not connect to database');
