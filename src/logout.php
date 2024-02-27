<?php
session_start();

// Limpa todas as variáveis de sessão
$_SESSION = array();

// Se necessário, remove o cookie que identifica a sessão
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Finalmente, destrói a sessão
session_destroy();

// Redireciona para a página inicial ou para onde preferir
header("Location: /"); // Substitua "index.php" pelo URL desejado
exit();
?>