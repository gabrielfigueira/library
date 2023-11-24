<?php

require_once(__DIR__.'/../model/acervo.php');

function findAcervo($conn, $id) {
	return find($conn, $id);
}

function AllAcervos($conn) {
	return listAcervos($conn);
}

function createAcervo($conn, $editora_id, $autor, $ano, $quantidade, $descricao) {
	$acervo = create($conn, $editora_id, $autor, $ano, $quantidade, $descricao);
	$message = $acervo == 1 ? 'success-create' : 'error-create';
	return header("Location: http://localhost:3003/views/acervos?message=$message");
}

function updateAcervo($conn, $id, $editora_id, $autor, $ano, $quantidade, $descricao) {
	$updateAcervo = update($conn, $id, $editora_id, $autor, $ano, $quantidade, $descricao);
	$message = $updateAcervo == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteAcervo($conn, $id) {
	$deleteAcervo = delete($conn, $id);
	$message = $deleteAcervo == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
