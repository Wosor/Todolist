<?php

require_once 'includes/dbh.inc.php';

if (isset($_POST['name'])) {
	$name = trim($_POST['name']);

	if (!empty($name)) {
		$addedQuery = $db->prepare("
			INSERT INTO items (name, users, done, created)
			VALUES (:name, :users, 0, NOW())
		");

		$addedQuery->execute([
			'name' => $name,
			'users' => $_SESSION['users_id']
		]);
	}
}

header('location: index.php');