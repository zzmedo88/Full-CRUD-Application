<?php
$server="127.0.0.1";
$user = "root";
$pass = "";
$db = "mybooks";

$con = new mysqli($server,$user,$pass,$db);

session_start();