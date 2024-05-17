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
    </style>
</head>
<body>
<?php include("../paginas/NavBar.html"); ?>
<img src="curso1.jpg" alt="Imagem" class="imagem-horizontal">
<br>  
<h2 class="mensagem">Escola Alfredo</h2>
<h3 class="mensagem2">Junte-se a nós</h3>

<div class="learn-courses">
    <div class="container">
        <div class="courses">
            <div class="box-wrap" itemprop="event" itemscope itemtype="http://schema.org/Course">
            <h2>Engenharia Informática</h2>
                <a href="CursosUtilizador.php" class="learn-desining-banner" itemprop="name">Cursos >>></a>
                <div class="box-body" itemprop="description">
                    <p>Formação de profissionais capazes de especificar, projectar, implementar e gerir Sistemas e Redes Informáticas Empresariais, fixas ou móveis. A formação é essencialmente prática e abrange um conjunto muito vasto de diferentes áreas da Engenharia Informatica</p>
                    <section itemprop="time">
                        <p><span>Duração:</span> 4 Anos</p>
                        <p><span>Horário:</span> 6h-12h / 11h-17h</p>
                        <p><span>Preço:</span> 4.000,00</p>
                    </section>
                </div>
            </div>
            <div class="box-wrap" itemprop="event" itemscope itemtype="http://schema.org/Course">
                 <h2>Energias Renováveis</h2>
                <a href="CursosUtilizador.php" class="learn-desining-banner" itemprop="name">Cursos >>></a>
                <div class="box-body" itemprop="description">
                    <p>O Curso de Energias Renováveis é dirigido a quem tenha interesse na área da instalação e manutenção de sistemas solares térmicos, fotovoltaicos e eólicos</p>
                    <section itemprop="time">
                        <p><span>Duração:</span> 4 Anos</p>
                        <p><span>Horário:</span> 6h-12h / 11h-17h</p>
                        <p><span>Preço:</span> 2.500,00</p>
                    </section>
                </div>
            </div>
            <div class="box-wrap" itemprop="event" itemscope itemtype="http://schema.org/Course">
                <h1> Design Gráfico </h1>
                <a href="CursosUtilizador.php" class="learn-desining-banner" itemprop="name">Cursos >>></a>
                <div class="box-body" itemprop="description">
                    <p>O Curso de Design Gráfico é o primeiro passo no começo de uma nova carreira de sucesso! A formação Master D foca-se no desenvolver dos conhecimentos base sobre a área do Design </p>
                    <section itemprop="time">
                        <p><span>Duração:</span> 4 Anos</p>
                        <p><span>Horário:</span> 6h-12h / 11h-17h</p>
                        <p><span>Preço:</span> 3.000,00</p>
                    </section>
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
                <p class="textos">Rua da cegonha<br>Avenida do solario<br>6000-247 Castelo Branco.</p>
                <h2 class="card-text">Contactos</h2>
                <p class="textos">(+351) 123 123 123<br>escolaalfrego@ALF.pt</p>
                <h2 class="card-text">Horários</h2>
                <p class="textos">Segunda a Sexta<br>8:30 - 17:30<br></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
