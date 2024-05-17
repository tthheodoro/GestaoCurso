<?php

session_start();
include ("../basedados/basedados.h");

$IdInscricao = $_GET['IdInscricao'];
echo $IdInscricao;

$sql = "DELETE FROM inscricao WHERE IdInscricao = $IdInscricao";
$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1 ) {
    header("Location: PrincipalDocente.php"); // Redirecionar para a página de logout ou outra página relevante
    die();
} else {
    header("Location: index.php");
    die();
}


?> 
