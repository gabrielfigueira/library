<?php  require_once(__DIR__.'/../config/database.php'); ?>

<?php

function find($conn, $id) {
	$id = mysqli_real_escape_string($conn, $id);
	$acervo;

	$sql = "SELECT * FROM acervos  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$acervo = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $acervo;
}

function create($conn, $editora_id, $autor, $ano, $quantidade, $descricao) {
	$editora_id = mysqli_real_escape_string($conn, $editora_id);
	$autor = mysqli_real_escape_string($conn, $autor);
	$ano = mysqli_real_escape_string($conn, $ano);
	$quantidade = mysqli_real_escape_string($conn, $quantidade);
	$descricao = mysqli_real_escape_string($conn, $descricao);
	if($editora_id && $autor && $ano && $quantidade && $descricao) {
		$sql = "INSERT INTO acervos (editora_id, autor, ano, quantidade, descricao) VALUES (?, ?, ?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'isiis', $editora_id, $autor, $ano, $quantidade, $descricao);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function listAcervos($conn) {
	$acervos = [];

	$sql = "SELECT * FROM acervos";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$acervos = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $acervos;
}

function update($conn, $id, $editora_id, $autor, $ano, $quantidade, $descricao) {
	if($id && $editora_id && $autor && $ano && $quantidade && $descricao) {
		$sql = "UPDATE acervos SET editora_id = ?, autor = ?, ano = ?, quantidade = ? , descricao = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'iisiis', $id, $editora_id, $autor, $ano, $quantidade, $descricao);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function delete($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);

	if($id) {
		$sql = "DELETE FROM acervos WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
