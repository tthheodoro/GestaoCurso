<?php
// Dados de conexão com o banco de dados
$servername = "localhost"; // substitua pelo seu servidor
$username = "root"; // substitua pelo seu nome de usuário
$password = ""; // substitua pela sua senha
$dbname = "cursos"; // substitua pelo nome do seu banco de dados

try {
    // Cria uma conexão PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Seta o modo de erro do PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Em caso de erro na conexão ou na consulta, exibe o erro
    echo "Erro na conexão: " . $e->getMessage();
}
?>
