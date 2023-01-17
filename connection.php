<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "sort";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
    die("Database not found!");
}
