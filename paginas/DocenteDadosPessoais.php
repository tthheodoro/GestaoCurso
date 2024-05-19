<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['tipoUtilizador'] == 2) {
?>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

<?php

include ("../basedados/basedados.h");
include ("../paginas/NavBarDocente.html");
?>
</br></br>
<ul class="mx-auto">
<h3>Gestão de Dados Pessoais</h3>
 


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
                                        <th scope="col" style="border-right: 1px solid #ccc;">Nome</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Password</th>
                                        <th scope="col" style="border-right: 1px solid #ccc;">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody> 
                                    <?php 
                                    try {
                                        // Exemplo de consulta SQL
                                        $id = $_SESSION['IdUtilizador'];
                                        $sql = "SELECT * FROM utilizadores WHERE IdUtilizador = $id";
                                        // Executa a consulta
                                        $result = mysqli_query($conn, $sql);
                                        // Verifica se a consulta retornou resultados
                                        if ($result) {
                                            // Exibe os resultados
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<tr style="border-bottom: 1px solid #ccc;">'; 
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Nome'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Password'] . '</td>';
                                                // Botões de edição e exclusão
                                                echo '<td style="border-right: 1px solid #ccc;">';
                                                echo '<a href="DocenteEditarDadosPessoais.php?IdUtilizador=' . $row['IdUtilizador'] . '"><button>Editar</button></a>';
                                                echo '<a href="DocenteApagarDados.php?IdUtilizador=' . $row['IdUtilizador'] . '"><button>Apagar</button></a>';
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
</ul>
</body>
</html>
<?php
} else { 
    header("Location: index.php");
        }  
?>
