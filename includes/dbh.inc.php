<?php

$servername = "buenvia.com";
$dBUsername = "buenviadb";
$dBPassword = "buenvia_11";
$dBName = "buenvia";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
