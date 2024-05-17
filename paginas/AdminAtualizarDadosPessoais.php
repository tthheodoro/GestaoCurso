<?php
session_start();
include ("../basedados/basedados.h");

$Nome = $_POST['Nome'];
$Password = $_POST['Password'];
$IdUtilizador = $_SESSION['IdUtilizador'];

$sql = "UPDATE utilizadores SET Nome = '$Nome' , Password = '$Password' WHERE IdUtilizador = $IdUtilizador";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_affected_rows($conn) == 1 ) {
    header("Location: AdminDadosPessoais.php");
} else {
    header("Location: index.php");
}

?>