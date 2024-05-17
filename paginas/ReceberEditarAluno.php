<?php
session_start();
include("../basedados/basedados.h");

if (isset($_POST['IdUtilizador'])) {
    $IdUtilizador = $_POST['IdUtilizador'];
    $nome = $_POST['nome'];
    $morada = $_POST['morada'];
    $email = $_POST['email'];

    $sql = "UPDATE utilizadores SET nome='$nome', morada='$morada', email='$email' WHERE IdUtilizador=$IdUtilizador";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_affected_rows($conn) == 1 ) {
            header("Location: AlunoDadosPessoais.php");
            exit();
        } else {
            echo "Nenhum registro foi atualizado.";
            exit();
        }
    } else {
        // Caso ocorra algum erro na consulta SQL
        echo "Erro: " . mysqli_error($conn);
        exit();
    }
} else {
    echo "ID do utilizador não fornecido.";
    exit();
}
?>
