<?php  require_once(__DIR__.'/../config/database.php'); ?>

<?php

function findEditora($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
	$user;

	$sql = "SELECT * FROM editoras  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $user;
}

function createEditora($conn, $nome) {
	$nome = mysqli_real_escape_string($conn, $nome);

	if($nome) {
		$sql = "INSERT INTO editoras (nome) VALUES (?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
      print($sql);
		mysqli_stmt_bind_param($stmt, 's', $nome);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function listEditoras($conn) {
    $editoras = [];

	$sql = "SELECT * FROM editoras";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$editoras = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $editoras;
}

function updateEditora($conn, $id, $nome) {
    if($nome) {
		$sql = "UPDATE editoras SET nome = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $nome, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteEditora($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);

	if($id) {
		$sql = "DELETE FROM editoras WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
