<?php

session_start();
include ("../basedados/basedados.h");

$IdCurso = $_GET['IdCurso'];

$sql = "DELETE FROM curso WHERE IdCurso = $IdCurso";
$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1 ) {
    header("Location: CursosAdmin.php"); // Redirecionar para a página de logout ou outra página relevante
    die();
} else {
    header("Location: index.php");
    die();
}

?> 
