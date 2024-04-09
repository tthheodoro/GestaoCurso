<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">EAF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
             <ul class="navbar-nav mx-auto">     
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Página Principal
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cursos.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre nós</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</br></br>
<ul class="mx-auto">
<h3>Cursos de Formação</h3>

<?php
include 'conexao.php';?>

<button type="button" class="btn btn-primary">Adicionar Novo</button>

<section class="intro">
    <div class="mask d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive bg-white">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Ações</th>
                                    <th scope="col"></th> <!-- Nova coluna para as ações -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                try {
                                    // Exemplo de consulta SQL
                                    $sql = "SELECT * FROM curso";
                                    // Executa a consulta
                                    $result = $conn->query($sql);

                                    // Verifica se a consulta retornou resultados
                                    if ($result && $result->rowCount() > 0) {
                                        // Exibe os resultados
                                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                            echo '<tr>';
                                            echo '<th scope="row" style="color: #666666;">' . $row['IdCurso'] . '</th>';
                                            echo '<td>' . $row['Nome'] . '</td>';
                                            echo '<td>' . $row['Descricao'] . '</td>';
                                            // Botões de edição e exclusão
                                            echo '<td><a href="PaginaUtilizadorAdminEditar.php?id=' . $row['IdCurso'] . '"><img src="pen.svg"/>Editar</a></td>';
                                            echo '<td><a href="PaginaUtilizadorAdminEliminar.php?id=' . $row['IdCurso'] . '"><img src="trash.svg"/>Eliminar</a></td>';
                                            echo '</tr>';
                                        }
                                        
                                    } else {
                                        echo '<tr><td colspan="4">Nenhum resultado encontrado.</td></tr>';
                                    }
                                } catch (PDOException $e) {
                                    // Em caso de erro na conexão ou na consulta, exibe o erro
                                    echo '<tr><td colspan="4">Erro na consulta: ' . $e->getMessage() . '</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
$conn = null;
?>
</ul>

</body>
</html>
