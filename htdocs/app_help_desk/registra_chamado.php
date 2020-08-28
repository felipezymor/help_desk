<?php
session_start();
//montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; //PHP_EOL = PHP End Of Line

//cria o arquivo txt, a extensão pode ser criada e a leitura será puramente texto
$arquivo = fopen('../../private_help_desk/arquivo.hd', 'a'); //parametro 'a' abre o arquivo somente para escrita

fwrite($arquivo, $texto); //escreve no arquivo

fclose($arquivo); //fecha o arquivo

header('Location: abrir_chamado.php');
