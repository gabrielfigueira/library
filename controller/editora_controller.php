<?php

require_once(__DIR__.'/../model/editora.php');

function findUserAction($conn, $id) {
	return findUserDb($conn, $id);
}

function AllEditoras($conn) {
	return listEditoras($conn);
}

function create($conn, $nome) {
	$editora = createEditora($conn, $nome);
	$message = $editora == 1 ? 'success-create' : 'error-create';
	print($message);
	return header("Location: http://localhost:3003/views/editoras?message=$message");
}

function updateUserAction($conn, $id, $name, $email, $phone) {
	$updateUserDb = updateUserDb($conn, $id, $name, $email, $phone);
	$message = $updateUserDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteUserAction($conn, $id) {
	$deleteUserDb = deleteUserDb($conn, $id);
	$message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
