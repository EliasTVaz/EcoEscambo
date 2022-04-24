<?php
    session_start();

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
    
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        
        exit();
    }
    
    if( $email == 'teste@teste.com' && $senha == '1234' )
    {
        $_SESSION["usuario"] = 'Desenvolvedor';
        $_SESSION["idUsuario"] = 001;
        Redirect('Produtos/catalogoProduto.php', false);
    }
    else
    {
        Redirect('index.php?ehUsuarioInvalido=1', false);
    }
?>