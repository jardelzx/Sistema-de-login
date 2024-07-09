<?php

session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>

<body>
   
<nav class = "navbar navbar-ligth bg-ligth">
    <div classe = " container-fluid">
        <a class ="navbar-brand">
            Sistema x
        </a>
<?php
print "Olá, " .$_SESSION["nome"];
print "<a href= 'logout.php' class='btn btn-danger'>Sair</a>";

?>
    </div>

</nav>
    VIDA LONGA AOS ROBIN-HOOD
</body>
</html>