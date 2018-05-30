<?php

require_once 'includes/dbh.inc.php';

if (isset($_GET['as'], $_GET['item'])) {
	$as = $_GET['as'];
	$item = $_GET['item'];

	switch ($as) {
		case 'done':
			$doneQuery = $db->prepare("
				UPDATE items
				SET done = 1
				WHERE id = :item
				AND users = :users
				");

				$doneQuery->execute([
					'item' => $item,
					'users' => $_SESSION['users_id']
				]);
			break;
	}
}

header('location: index.php');
