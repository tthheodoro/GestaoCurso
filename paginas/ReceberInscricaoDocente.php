<?php

session_start();
include ("../basedados/basedados.h");

$IdCurso = $_POST['idCursoSelecionado'];
$IdUtilizador = $_SESSION['IdUtilizador'];
$email = $_POST['email'];
$informacao = $_POST['informacao'];

$sql_verificar_inscricao = "SELECT * FROM inscricao WHERE IdCurso = $IdCurso AND IdUtilizador = $IdUtilizador";
$result_verificar_inscricao = mysqli_query($conn, $sql_verificar_inscricao);


if (mysqli_num_rows($result_verificar_inscricao) > 0) {
    // O aluno já está inscrito neste curso
    header("Location: InscricoesAluno.php?mensagemerro=Você%20já%20está%20inscrito%20neste%20curso.");
    exit();
}

$sql_select_curso = "SELECT Vagas_disponiveis FROM curso WHERE IdCurso = $IdCurso";
$result_select_curso = mysqli_query($conn, $sql_select_curso);

if (!$result_select_curso) {
    die("Erro ao buscar informações do curso: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result_select_curso);
if (!$row) {
    echo("Curso não encontrado");
}

$vagas_disponiveis = $row['Vagas_disponiveis'];

if ($vagas_disponiveis > 0) {
    // Se houver vagas disponíveis, insira a inscrição e atualize o número de vagas
    $sql_insert = "INSERT INTO inscricao(IdCurso, IdUtilizador, email, informacao) VALUES ($IdCurso, $IdUtilizador, '$email', '$informacao')";
    $result_insert = mysqli_query($conn, $sql_insert);

    if ($result_insert) {
        // Inserção bem-sucedida, atualize o número de vagas no curso
        $vagas_disponiveis--;
        $sql_update_curso = "UPDATE curso SET Vagas_disponiveis = $vagas_disponiveis WHERE IdCurso = $IdCurso";
        $result_update_curso = mysqli_query($conn, $sql_update_curso);

        if (!$result_update_curso) {
            echo("Erro a registar");
        }

        header("Location: InscricoesAluno.php");
    } else {
        // Erro na inserção
        echo("Erro a registar inscrição");
    }
} else {
    // Não há vagas disponíveis
    header("Location: InscricoesAluno.php?mensagemerro=Não%20há%20vagas%20disponíveis%20para%20este%20curso.");
    exit(); 
}

mysqli_close($conn);
?>
