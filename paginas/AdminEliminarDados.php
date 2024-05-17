<?php

session_start();
include ("../basedados/basedados.h");

$IdUtilizador = $_POST['IdUtilizador'];
echo $IdUtilizador;

$sql = "DELETE FROM utilizadores WHERE IdUtilizador = $IdUtilizador";
$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1 ) {
    header("Location: logout.php"); // Redirecionar para a página de logout ou outra página relevante
    die();
} else {
    header("Location: index.php");
    die();
}

?> 
