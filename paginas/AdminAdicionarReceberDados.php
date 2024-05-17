<?php
session_start();
include ("../basedados/basedados.h");

// Recebe os dados do formulário
$Nome = $_POST['Nome'];
$Morada = $_POST['Morada'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$TipoUtilizador = $_POST['tipoUtilizador'];
$Aprovado = $_POST['Aprovado'];

// Insere os dados na tabela do banco de dados
$sql = "INSERT INTO utilizadores (Nome, Morada, Email, Password, tipoUtilizador, Aprovado) 
        VALUES ('$Nome', '$Morada', '$Email', '$Password', '$TipoUtilizador', '$Aprovado')";
$result = mysqli_query($conn, $sql);


if ($result) {
    header("Location: UtilizadoresAdmin.php");
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}
?>
