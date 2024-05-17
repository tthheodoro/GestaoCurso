<?php

session_start();
include ("../basedados/basedados.h");

$IdUtilizador = $_POST['IdUtilizador'];
$Nome = $_POST['Nome'];
$Morada = $_POST['Morada'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$tipoUtilizador = $_POST['tipoUtilizador'];
$Aprovado = $_POST['Aprovado'];

if ($Aprovado != 0 && $Aprovado != 1) {
    header("Location: UtilizadoresAdmin.php?erro=Campo Aprovado deve ser 1 ou 0");
    die();
}

$sql = "UPDATE utilizadores SET Nome='$Nome', Morada='$Morada' ,Email='$Email',Password='$Password', tipoUtilizador='$tipoUtilizador', Aprovado='$Aprovado' WHERE IdUtilizador=$IdUtilizador";

$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1 ) {
    header("Location: UtilizadoresAdmin.php");
}else{
    header("Location: UtilizadoresAdmin.php");
}

?>