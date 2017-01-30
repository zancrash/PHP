<?php

session_start();

//fakes a login
$_SESSION['user_id'] = 1;

//fetch database
$db = new PDO('mysql:dbname=todo;host=localhost', 'root', 'root');

//Handle this in some other way
if(!isset($_SESSION['user_id'])) {
  die('You are not signed in.');
}

?>
