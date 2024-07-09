<?php

session_start();

if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    echo "<script>location.href='index.php';</script>";
    exit;
}

include('config.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$usuario = $_POST["usuario"];
$senha = $_POST["senha"]; // Considere usar hashing se as senhas estiverem criptografadas

$sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND senha = '{$senha}'";
echo "Generated SQL: $sql<br>"; // Linha de depuração
$res = $conn->query($sql);

if (!$res) {
    die("Query failed: " . $conn->error);
}

$row = $res->fetch_object();
$qtd = $res->num_rows;

if ($qtd > 0) {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row->tipo;
    echo "<script>location.href='dashboard.php';</script>";
} else {
    echo "<script>alert('Usuário e/ou senha incorretos');</script>";
    echo "<script>location.href='index.php';</script>";
}
?>
