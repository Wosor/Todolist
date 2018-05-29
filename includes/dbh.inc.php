<?php

session_start();

$_SESSION['users_id'] = 1;

$db = new PDO('mysql:dbname=todo;localhost', 'root', '');

if (!isset($_SESSION['users_id'])) {
	die('you are not signed in.');
}