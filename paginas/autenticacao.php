<?php
session_start();
include("../basedados/basedados.h");

$mensagem_erro = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Nome']) && isset($_POST['Password'])) {
        $Nome = $_POST['Nome'];
        $Password = $_POST['Password'];

        // Prepare uma consulta SQL para buscar as credenciais do usuário
        $sql = "SELECT * FROM utilizadores WHERE Nome='$Nome' AND Password='$Password'";
        $result = mysqli_query($conn, $sql);

        // Verifique se há correspondências de usuário na consulta
        if (mysqli_num_rows($result) == 1 ) {
            $row = mysqli_fetch_array($result);

            // Verifique se o usuário está aprovado
            if ($row['Aprovado'] == 1) {
                $role = $row['tipoUtilizador'];
                $_SESSION['tipoUtilizador'] = $role;
                $_SESSION['IdUtilizador'] = $row['IdUtilizador'];
                // Redirecionar para a página apropriada após o login
                if ($role == 1) {
                    header("Location: PrincipalAluno.php");
                } elseif ($role == 2) {
                    header("Location: PrincipalDocente.php");
                } elseif ($role == 3) {
                    header("Location: PrincipalAdmin.php");
                }
                exit();
            } else {
                // Se o usuário não estiver aprovado, exibir mensagem de erro
                header("Location: index.php?mensagem=Conta%20ainda%20n%C3%A3o%20aprovada.%20Por%20favor%2C%20aguarde.");
                exit();
            }
        } else {
            // Define a mensagem de erro se as credenciais forem inválidas
            $mensagem_erro = 'Credenciais inválidas. Por favor, verifique seu nome de usuário e senha.';
        }
    }
}
?>
