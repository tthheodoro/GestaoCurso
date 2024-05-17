
<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['tipoUtilizador'] == 1) {
?>
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
            width: 100%; /* Alterando para 100% */
            height: 300px; /* Altura da imagem */
            display: block; /* Garante que a imagem não tenha espaços extras */
            object-fit: cover; /* Mantém a proporção e corta a imagem para preencher */
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
        margin-top: 20px;
    }



    .img-wrap img {
        max-width: 100%;
        height: auto;
    }

    .box-body {
        margin-top: 15px;
    }

    .box-body p {
        margin-bottom: 10px;
    }

    .box-body section p {
        margin-bottom: 5px;
    }
    .box-wrap {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        margin-right: 15px;
        width: calc(33.3333% - 15px); /* Divide a largura em 3 colunas */
        box-sizing: border-box; /* Inclui padding e borda na largura */
    }

    .box-wrap:nth-child(3n) {
        margin-right: 0; /* Remove a margem da última caixa em cada linha */
    }

    @media (max-width: 992px) {
        .box-wrap {
            width: calc(50% - 15px); /* Divide a largura em 2 colunas em telas menores */
        }

        .box-wrap:nth-child(2n) {
            margin-right: 0; /* Remove a margem da última caixa em cada linha */
        }
    }

    @media (max-width: 768px) {
        .box-wrap {
            width: 100%; /* Define a largura para 100% em telas ainda menores */
            margin-right: 0;
        }
    }

    .mensagemerro {
        font-size: 70px; /* Ajuste o tamanho da fonte conforme desejado */
        font-weight: bold;
        text-align: center;
        margin-top: 20px; /* Adicione um espaçamento superior para separar da mensagem principal */
    }
    </style>
</head>
<body>
<?php
//include ("../paginas/segurancaAluno.php");
include ("../basedados/basedados.h");
include ("../paginas/NavBarAluno.html");

if(isset($_GET['mensagemerro'])) {
  $mensagemerro = $_GET['mensagemerro'];
  echo "<p>$mensagemerro</p>";
}
?>
<img src="curso1.jpg" alt="Imagem" class="imagem-horizontal">
    <br>  

<h2 class="mensagem">Escola Alfredo</h2>
<h3 class="mensagem2">Junte-se a nós</h3>

<div class="learn-courses">
    <div class="container">
        <div class="courses">
            <div class="owl-one owl-carousel">
                <div class="box-wrap" itemprop="event" itemscope itemtype="http://schema.org/Course">
                    <div class="img-wrap" itemprop="image"><img src="image  .jpg" alt="Imagem do curso 1"></div>
                    <a href="pagina_curso1.html" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
                    <div class="box-body" itemprop="description">
                        <p>Dem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section itemprop="time">
                            <p><span>Duração:</span> 4 Anos</p>
                            <p><span>Horário:</span> 6h-12h / 11h-17h</p>
                            <p><span>Preço:</span> 4.000,00</p>
                        </section>
                    </div>
                </div>

                <div class="box-wrap" itemprop="event" itemscope itemtype="http://schema.org/Course">
                    <div class="img-wrap" itemprop="image"><img src="curso2.jpg" alt="Imagem do curso 2"></div>
                    <a href="pagina_curso2.html" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
                    <div class="box-body" itemprop="description">
                        <p>Descrição do curso 2 Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section itemprop="time">
                            <p><span>Duração:</span> 4 Anos</p>
                            <p><span>Horário:</span> 6h-12h / 11h-17h</p>
                            <p><span>Preço:</span> 4.000,00</p>
                        </section>
                    </div>
                </div>

                <div class="box-wrap" itemprop="event" itemscope itemtype="http://schema.org/Course">
                    <div class="img-wrap" itemprop="image"><img src="curso3.jpg" alt="Imagem do curso 3"></div>
                    <a href="pagina_curso3.html" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
                    <div class="box-body" itemprop="description">
                        <p>Descrição do curso 3 Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section itemprop="time">
                            <p><span>Duração:</span> 4 Anos</p>
                            <p><span>Horário:</span> 6h-12h / 11h-17h</p>
                            <p><span>Preço:</span> 4.000,00</p>
                        </section>
                    </div>
                </div>

                <div class="box-wrap" itemprop="event" itemscope itemtype="http://schema.org/Course">
                    <div class="img-wrap" itemprop="image"><img src="curso4.jpg" alt="Imagem do curso 4"></div>
                    <a href="pagina_curso4.html" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
                    <div class="box-body" itemprop="description">
                        <p>Descrição do curso 4 Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section itemprop="time">
                            <p><span>Duração:</span> 4 Anos</p>
                            <p><span>Horário:</span> 6h-12h / 11h-17h</p>
                            <p><span>Preço:</span> 4.000,00</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 coluna">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3064.4878660025033!2d-7.498220224376429!3d39.818478171542026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3d5e9c57c6a91d%3A0x2c69bbca295be317!2sEscola%20Superior%20de%20Educa%C3%A7%C3%A3o%20de%20Castelo%20Branco!5e0!3m2!1spt-PT!2spt!4v1715003172812!5m2!1spt-PT!2spt" 
              width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 coluna">
            <h2 class="card-text">Localização</h2>
            <p class="textos">Rua da cegonha<br>
                        Avenida do solario<br> 
                        6000-247 Castelo Branco.</p>
            <h2 class="card-text">Contactos</h2>
            <p class="textos">(+351) 123 123 123<br>
                        escolaalfrego@ALF.pt 
                      </p>
            <h2 class="card-text">Horários</h2>
            <p class="textos">Segunda a Sexta<br>
                        8:30 - 17:30<br> 
                       </p>       
            </div>
        </div>
    </div>
</div>


</body>
</html>
<?php
} else { 
    header("Location: index.php");
        }  
?>
