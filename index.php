<?php

	require('database.php');

	// $driver, $charset, $host, $db, $user, $pass
	$dbm = new Database('', '', '', '', '', '');

	$table = '';
	
	// INSERT ex1
	$insert = [
		['name' =>'test', 'status' => 5],
		// ['name' =>'test2', 'status' =>'6'],
	];

	// INSERT ex2
	// $insert = [
	// 	'name' =>'tester', 'status' =>'1'
	// ];

	// UPDATE
	$update = [
		// 'name' => 'atester',
		// 'status' => '1234556',
		// 'status' => [23, 32],
	];

	// WHERE
	$where = [
		// ['id', 'eq', 43, 'or'],
		// ['id', 'lt', '47', 'or'],
		// ['name', 'null'],
		// ['name', 'notnull', '', ''],
		// ['name', 'like', '%%', 'or'],
		// ['id', 'in', [26, 27, 28], 'or'],
	];


	// CRUD
	// $dbm->insert($table, $insert);
	// $dbm->update($table, $update, $where);
	// $dbm->select([], $table, $where);
	// $dbm->delete($table, $where);