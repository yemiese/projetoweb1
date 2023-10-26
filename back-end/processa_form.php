<?php

//print_r($_GET);

$nome = $_GET['Nome'];
$idade = $_GET['Idade'];

echo '<h1>Dados do usuário</h1>';
echo '<hr';
echo "<p>O usuário $nome tem $idade anos </p>";

echo '<a href="http://localhost/udesc/index.html"><button>Home Page</button></a>';
echo '<button type="button" onclick="javascript:history.back()">Voltar</button>';
echo '<button onclick="window.location.href=\'https:\\www.udesc.br\'">Vai para Udesc </button>';



?>
