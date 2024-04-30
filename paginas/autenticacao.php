<?php
// Inclua o arquivo de conexão com o banco de dados
session_start();
include ("../basedados/basedados.h");

// Definir variável de mensagem de erro
$mensagem_erro = '';

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se ambos os campos foram preenchidos
    if (isset($_POST['Nome']) && isset($_POST['Password'])) {
        // Prepare uma consulta SQL para buscar as credenciais do usuário
        $Nome = $_POST['Nome'];
        $Password = $_POST['Password'];

        $sql = "SELECT * FROM utilizadores WHERE Nome=\"$Nome\" AND Password=\"$Password\"";
        $result = mysqli_query($conn, $sql);
        
        // Verifique se há correspondências de usuário na consulta
        if (mysqli_affected_rows($conn) == 1 ) {
            $row = mysqli_fetch_array($result);

            $role = $row['tipoUtilizador'];
            $_SESSION['tipoUtilizador'] = $role;
            $_SESSION['idUtilizador'] = $row['idUtilizador'];
            echo $role;
            // Redirecionar com base no tipo de usuário
            if ($role == 1) {
                // Redirecionar para a página do aluno
                header("Location: PrincipalAluno.php");
                exit();
            } elseif ($role == 2) {
                // Redirecionar para a página do professor
                header("Location: PrincipalDocente.php");
                exit();
            } elseif ($role == 3) {
                // Redirecionar para a página de administração
                header("Location: PrincipalAdmin.php");
                exit();
            }
        } else {
            // Define a mensagem de erro
            $mensagem_erro = 'Credenciais inválidas. Por favor, verifique seu nome de usuário e senha.';
        }
    }
}
?>
