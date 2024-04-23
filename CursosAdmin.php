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


<section class="intro mt-5">
    <div class="mask d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="rectangular-bg"> 
                        <section class="intro mt-3">
                            <div class="table-responsive bg-white">
                                <table id="tabela-cursos" class="table mb-0" style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                    <tr style="border-bottom: 1px solid #ccc;">
                                        <th scope="col" style="border-right: 1px solid #ccc;">Id</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Nome</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Descrição</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Editar</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Eliminar</th>
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
                                                echo '<tr style="border-bottom: 1px solid #ccc;">'; 
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['idCurso'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Nome'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Descricao'] . '</td>';
                                                // Botões de edição e exclusão
                                                echo '<td style="border-right: 1px solid #ccc;"><a href="PaginaUtilizadorAdminEditar.php?id=' . $row['idCurso'] . '"><img src="pen.svg"/></a></td>';
                                                echo '<td><a href="PaginaUtilizadorAdminEliminar.php?id=' . $row['idCurso'] . '"><img src="trash.svg"/></a></td>';
                                                echo '</tr>';
                                            }
                                            
                                        } else {
                                            echo '<tr><td colspan="5" style="border-right: 1px solid #ccc;">Nenhum resultado encontrado.</td></tr>';
                                        }
                                    } catch (PDOException $e) {
                                        // Em caso de erro na conexão ou na consulta, exibe o erro
                                        echo '<tr><td colspan="5" style="border-right: 1px solid #ccc;">Erro na consulta: ' . $e->getMessage() . '</td></tr>';
                                    }
                                      ?> 

                                </tbody> 
                                </table>
                            </div>
                            <section class="intro mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function filterTable(category) {
        var rows = document.querySelectorAll("tbody tr");
        rows.forEach(function(row) {
            var course = row.querySelector("td:nth-child(2)").innerText; // assuming course name is in the second column
            if (category === 'todos' || course === category) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }
</script>

<?php 
$conn = null;
?>
</ul>

</body>
</html>
