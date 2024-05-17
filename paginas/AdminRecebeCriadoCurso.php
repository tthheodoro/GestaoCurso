<?php

session_start();
include ("../basedados/basedados.h");
$IdCurso = $_POST ['IdCurso'];
$IdUtilizador = $_SESSION['idUtilizador'];
$email = $_POST['email'];
$informacao = $_POST['informacao'];


echo "IdCurso: " . $IdCurso . "<br>";
echo "IdUtilizador: " . $IdUtilizador . "<br>";

$sql_insert = "INSERT INTO inscricao(IdCurso, IdUtilizador, email, informacao)
        VALUES ($IdCurso,  $IdUtilizador, \"$email\", \"$informacao\")";

$result_insert = mysqli_query($conn, $sql_insert);


//if (mysqli_affected_rows($conn) == 1 ) {
  //  header("Location: InscricoesAluno.php");
//}else{
//    header("Location: index.php");
//}

if ($result_insert) {
    // Inserção bem-sucedida
    header("Location: InscricoesAluno.php");
} else {
    // Erro na inserção
    header("Location: index.php?error=insert");
}

mysqli_close($conn);
?>