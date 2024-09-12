<?php
    include('inicia_sessao.php');
    //Limpa as variáveis de sessão
    session_unset();
    //Destroi a sessão
    session_destroy();
    //volta para o login
    header('Location: Index.php');
?>