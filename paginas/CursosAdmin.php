<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<?php



include("../paginas/NavBarAdmin.html");
?>
<body>

</br></br>
<ul class="mx-auto">
<h3>Cursos de Formação</h3>

<?php
include ("../basedados/basedados.h");
?>

<a href="AdminCriarCurso.php"><button>Adicionar Novo</button></a>


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
                                        <th scope="col" style="border-right: 1px solid #ccc;">Vagas Disponíveis</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody> 
                                    <?php 
                                    try {
                                        // Exemplo de consulta SQL
                                        $sql = "SELECT * FROM curso";
                                        // Executa a consulta
                                        $result = mysqli_query($conn, $sql);

                                        // Verifica se a consulta retornou resultados
                                        if ($result) {
                                            // Exibe os resultados
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<tr style="border-bottom: 1px solid #ccc;">'; 
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['IdCurso'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Nome'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Descricao'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Vagas_disponiveis'] . '</td>';
                                                // Botões de edição e exclusão
                                                echo '<td style="border-right: 1px solid #ccc;">';  
                                                echo '<a href="AdminEditarCurso.php?IdCurso=' . $row['IdCurso'] . '"><button>Editar</button></a>';
                                                //FALTA FAZER
                                                echo '<a href="AdminEliminarCurso.php?IdCurso=' . $row['IdCurso'] . '"><button>Eliminar</button></a>';          
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


<?php 
$conn = null;
?>
</ul>

</body>
</html>
