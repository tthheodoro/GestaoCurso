<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .curso-box {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .mensagem {
            font-size: 50px;
            font-weight: bold;
            text-align: center;
        }
        .textos {
            font-size: 20px;
            text-align: left;
        }
        .mensagem2 {
            font-size: 24px;
            text-align: center;
        }
        .imagem-horizontal {
            width: 100%;
            height: 300px;
            display: block;
            object-fit: cover;
        }
        .coluna {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-top: 20px;
        }
        .coluna img {
            max-width: 100%;
            height: auto;
        }
        .learn-courses {
            background-color: #f5f5f5;
            padding: 20px 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .courses {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        .box-wrap {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            flex: 1 1 calc(33.3333% - 15px); /* Ajuste flexível para 3 colunas */
            box-sizing: border-box;
        }
        @media (max-width: 992px) {
            .box-wrap {
                flex: 1 1 calc(50% - 15px); /* Ajuste flexível para 2 colunas em telas menores */
            }
        }
        @media (max-width: 768px) {
            .box-wrap {
                flex: 1 1 100%; /* Ajuste flexível para 1 coluna em telas ainda menores */
            }
        }
        .erro {
            color: red;
            font-weight: bold;
            font-size: 24px; /* Increase font size */
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php include("../paginas/NavBarDocente.html"); ?>

<img src="curso1.jpg" alt="Imagem" class="imagem-horizontal">

<?php
session_start();
if (isset($_SESSION['mensagem']) && !empty($_SESSION['mensagem'])) {
    echo '<div class="erro">' . $_SESSION['mensagem'] . '</div>';
    unset($_SESSION['mensagem']);
}
?>
<br>  
<h2 class="mensagem">Escola Alfredo</h2>
<h3 class="mensagem2">Administração</h3>


</body>
</html>
