<?php

session_start();
include ("../basedados/basedados.h");
$IdCurso = $_POST ['idCursoSelecionado'];
$IdUtilizador = $_SESSION['idUtilizador'];
$email = $_POST['email'];
$informacao = $_POST['informacao'];

$sql = "INSERT INTO inscricao(IdCurso, IdUtilizador, email, informacao)
        VALUES ($IdCurso,  $IdUtilizador, \"$email\", \"$informacao\")";

$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1 ) {
    header("Location: InscricoesAluno.php");
}else{
    header("Location: index.php");
}

?>