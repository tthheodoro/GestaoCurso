<?php

session_start();
include ("../basedados/basedados.h");

if(isset($_POST['IdCurso'])) {
    $IdCurso = $_POST['IdCurso'];
    $Nome = $_POST['Nome'];
    $Descricao = $_POST['Descricao'];

    $sql = "UPDATE curso SET Nome='$Nome', Descricao='$Descricao' WHERE IdCurso=$IdCurso";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: CursosAdmin.php");
    } else {
        echo "Erro ao atualizar o curso: " . mysqli_error($conn);
    }
} else {
    echo "ID do curso não fornecido.";
}

?>