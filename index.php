<?php 
    session_start();
    //Import do arquivo de layout
    require __DIR__ . '/assets/Comum/geral.php';    
    // Cabeçalho padrão
    imprimeCabecalhoLogin('EcoEscambo');
    
    $ehUsuarioInvalido = filter_input(INPUT_GET, "ehUsuarioInvalido", FILTER_VALIDATE_BOOLEAN);
?>

    <main class="mx-auto col-3">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body mx-auto">
                    <h5 class="card-title">Autenticação</h5>
                    <hr>
                    <form action="validarLogin.php" method="post">
                        <div class="mb-3 mx-auto">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="input-email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" id="input-senha">
                        </div>                                    
                        <button type="submit" class="btn btn-primary">login</button>                                    
                        <a href="cadastro.php" class="btn btn-secondary">Cadastrar</a>
                    </form>
                    <hr>
                    <a href="recuperacao.php">Esqueceu a senha?</a>
                </div>
            </div>
        </div>
        <?php 
            if( $ehUsuarioInvalido )
            {
                echo('
                    <div class="d-flex justify-content-center my-3">
                        <div class="card border-danger text-danger" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Em desenvolvimento</h5>
                                <hr>
                                <p class="card-text">
                                    Usuário de teste </br>
                                    Usuário: teste@teste.com </br>
                                    Senha: 1234
                                </p>
                            </div>
                        </div>   
                    </div>');
            }
        ?>
    </main>
<?php 
    // Rodapé padrão
    imprimeRodape(); 
?>