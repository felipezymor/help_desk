<?php
//  remover índices específicos do array de sessão: unset($_SESSION['valor do indice']). Remove o índice apenas se existir.
//  destruir completamente a sessão: session_destroy(). Remove completamente, e para ter acesso novamente precisa de nova requisição.

session_start();
session_destroy();
header('Location: index.php');
