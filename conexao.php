<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
    
<?php
    $servidor = "localhost";
    $banco = "tcc_rodolfo";
    $usuario = "root";
    $senha = "";

    $con = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro ao conectar o banco de dados (".mysqli_connect_errno.") ".mysqli_connect_error);

    if (!$con){
        echo "Erro ao conectar o banco de dados";
    }
?>
</body>
</html>