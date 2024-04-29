<?php
// Inclua o arquivo de conexão com o banco de dados
include 'conexao.php';

// Definir variável de mensagem de erro
$mensagem_erro = '';

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se ambos os campos foram preenchidos
    if (isset($_POST['Nome']) && isset($_POST['Password'])) {
        // Prepare uma consulta SQL para buscar as credenciais do usuário
        $Nome = $_POST['Nome'];
        $Password = $_POST['Password'];

        $sql = "SELECT * FROM utilizadores WHERE Nome=:nome AND Password=:password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $Nome);
        $stmt->bindParam(':password', $Password);
        $stmt->execute();

        // Verifique se há correspondências de usuário na consulta
        if ($stmt->rowCount() > 0) {
            // Obtenha os detalhes do usuário
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // Determine o tipo de usuário (aluno, professor, admin) com base na coluna 'tipoUtilizador' na tabela de usuários
            $role = $row['tipoUtilizador'];
            echo $role;
            // Redirecionar com base no tipo de usuário
            if ($role === 1) {
                // Redirecionar para a página do aluno
                header("Location: PrincipalAluno.php");
                exit();
            } elseif ($role === 2) {
                // Redirecionar para a página do professor
                header("Location: PrincipalDocente.php");
                exit();
            } elseif ($role === 3) {
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
