<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<?php

session_start();
include ("../basedados/basedados.h");
include ("../paginas/NavBarDocente.html");?>

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
                                        <th scope="col" style="border-right: 1px solid #ccc;">IdCurso</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">IdUtilizador</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">IdInscricao</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Email</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Informação</th>                             
                                    </tr>
                                    </thead>
                                    <tbody> 
                                    <?php                                   
                                    try {
                                        // Exemplo de consulta SQL
                                        $sql = "SELECT * FROM inscricao";
                                        // Executa a consulta
                                        $result = mysqli_query($conn, $sql);

                                        // Verifica se a consulta retornou resultados
                                        if ($result) {
                                            // Exibe os resultados
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<tr style="border-bottom: 1px solid #ccc;">'; 
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['IdCurso'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['IdUtilizador'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['IdInscricao'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['email'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['informacao'] . '</td>';
                                                // Botões de edição e exclusão
                                                echo '<td style="border-right: 1px solid #ccc;">';  
                                                echo '<a href="DocenteEditarInscricoes.php?IdInscricao=' . $row['IdInscricao'] . '"><button>Editar</button></a>';
                                                //FALTA FAZER
                                                echo '<a href="AlunoEliminarDados.php?IdInscricao=' . $row['IdInscricao'] .'"><button>Apagar</button></a>';          
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
</html>
</body>