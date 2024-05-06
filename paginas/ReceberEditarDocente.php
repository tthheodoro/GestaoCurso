<?php

session_start();
include ("../basedados/basedados.h");

$IdInscricao = $_POST['IdInscricao'];
$email = $_POST['email'];
$informacao = $_POST['informacao'];

$sql = "UPDATE inscricao SET email='$email', informacao='$informacao' WHERE IdInscricao=$IdInscricao";

$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1 ) {
    header("Location: InscricoesDocente.php");
}else{
    header("Location: index.php");
}

?>