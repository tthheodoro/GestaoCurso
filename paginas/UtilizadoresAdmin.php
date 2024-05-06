<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
<?php
include("../paginas/NavBarAdmin.html");
?>
</br></br>
<ul class="mx-auto">
<h3>Cursos de Formação</h3>

<?php
session_start();
include ("../basedados/basedados.h");?>

<button type="button" class="btn btn-primary">Adicionar Novo</button>

<script>
 function filterTable(tipo) {
    var rows = document.querySelectorAll("tbody tr");
    rows.forEach(function(row) {
        var tipoUtilizador = parseInt(row.querySelector("td:nth-child(6)").innerText.trim()); // assumindo que tipoUtilizador está na sexta coluna
        if (tipo === 'todos' || tipoUtilizador === parseInt(tipo)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}
</script>

<section class="intro mt-5">
    <div class="mask d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="rectangular-bg"> 
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filtrar por
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" onclick="filterTable('todos')">Todos</a>
                                <a class="dropdown-item" href="#" onclick="filterTable(1)">Aluno</a>
                                <a class="dropdown-item" href="#" onclick="filterTable(2)">Docente</a>
                                <a class="dropdown-item" href="#" onclick="filterTable(3)">Administrador</a>
                                <!-- Adicione mais opções de filtro conforme necessário -->
                            </div>
                        </div>
                        <section class="intro mt-3">
                            <div class="table-responsive bg-white">
                                <table id="tabela-cursos" class="table mb-0" style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                        <tr style="border-bottom: 1px solid #ccc;">
                                            <th scope="col" style="border-right: 1px solid #ccc;">Id</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Nome</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Morada</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Email</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Password</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">tipoUtilizador</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Editar</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <?php 
                                    try {
                                        // Exemplo de consulta SQL
                                        $sql = "SELECT * FROM utilizadores";
                                        // Executa a consulta
                                        $result = mysqli_query($conn, $sql);

                                        // Verifica se a consulta retornou resultados
                                        if ($result) {
                                            // Exibe os resultados
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<tr style="border-bottom: 1px solid #ccc;">'; 
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['IdUtilizador'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Nome'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Morada'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Email'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Password'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['tipoUtilizador'] . '</td>';
                                                // Botões de edição e exclusão
                                                echo '<td style="border-right: 1px solid #ccc;">';  
                                                echo '<a href="AdminEditarUtilizador.php?IdUtilizador=' . $row['IdUtilizador'] . '"><button>Ações</button></a>';
                                                //FALTA FAZER
                                                echo '<a><button>Apagar</button></a>';          
                                                echo '</tr>';
                                                echo '</td>';
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

<?php 
$conn = null;
?>
</ul>

</body>
</html>