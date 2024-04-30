<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn)
        die('Erro ao conectar: '.mysqli_error($conn));
    mysqli_select_db($conn, 'cursos');

?>