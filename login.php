<?php 
session_start();
require 'dbconn.php';


$stmt = $pdo->query('SELECT username, password FROM users');



echo print_r($stmt);