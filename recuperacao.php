<?php 
    //Import do arquivo de layout
    require __DIR__ . '/assets/Comum/geral.php';    
    // Cabeçalho padrão
    imprimeCabecalhoLogin('EcoEscambo - Recuperação');
?>
    <main class="mx-auto col-3">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body mx-auto">
                    <h5 class="card-title">Recuperação</h5>
                    <hr>
                    <form action="index.php">
                        <div class="mb-3 mx-auto">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="input-email" name="email" aria-describedby="emailHelp">
                        </div>  
                        <div class="mb-3 w-100">                             
                            <button type="submit" class="btn btn-primary">Recuperar acesso</button>
                            <a href="index.php" class="btn btn-secondary">Voltar</a>           
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </main>
<?php 
    // Rodapé padrão
    imprimeRodape(); 
?>