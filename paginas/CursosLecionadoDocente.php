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

<?php



include("../paginas/NavBarDocente.html");
?>
<body>

</br></br>
<ul class="mx-auto">
<h3>Cursos de Formaçãow</h3>
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
                             
                                    </tr>
                                    </thead>
                                    <tbody> 
                        <?php
                        // Iniciar a sessão
                        session_start();

                        // Incluir o arquivo de conexão ao banco de dados
                        include ("../basedados/basedados.h");

                        // Verificar se o utilizador está autenticado
                        if(isset($_SESSION['IdUtilizador'])) {
                            // ID do utilizador logado
                            $idUtilizador = $_SESSION['IdUtilizador'];

                            try {
                                // Consulta SQL para selecionar os cursos que o utilizador logado está a lecionar
                                $sql = "SELECT c.*
                                        FROM curso c
                                        INNER JOIN leciona l ON c.IdCurso = l.IdCurso
                                        WHERE l.IdUtilizador = $idUtilizador;";

                                $result = mysqli_query($conn, $sql);

                                // Verificar se a consulta retornou resultados
                                if ($result) {
                                    // Exibir os resultados
                                    while ($row = mysqli_fetch_array($result)) {
        
                                                echo '<tr style="border-bottom: 1px solid #ccc;">'; 
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['IdCurso'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Nome'] . '</td>';
                                                echo '<td style="border-right: 1px solid #ccc;">' . $row['Descricao'] . '</td>';
                                        // Botões de edição e exclusão
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="3" style="border-right: 1px solid #ccc;">Nenhum resultado encontrado.</td></tr>';
                                }
                            } catch (mysqli_sql_exception $e) {
                                // Em caso de erro na conexão ou na consulta, exibir o erro
                                echo '<tr><td colspan="3" style="border-right: 1px solid #ccc;">Erro na consulta: ' . $e->getMessage() . '</td></tr>';
                            }
                        } else {
                            // Se o utilizador não estiver autenticado, redirecionar para a página de login
                            header("Location: login.php");
                            exit();
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
// Fecha a conexão com o banco de dados
$conn = null;
?>
</ul>

</body>
</html>
<?php
} else { 
    header("Location: index.php");
        }  
?>
