<?php 
    session_start();
    //Import do arquivo de layout
    require __DIR__ . '/../assets/Comum/geral.php';    
    // Cabeçalho padrão
    imprimeCabecalho('EcoEscambo - Cadastro de Produto', $_SESSION["usuario"]);
?>
    <main class="mx-auto my-5 col-4">
        <div class="d-flex justify-content-center">
            <div class="card w-100" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produto</h5>
                    <hr>
                    <form action="">
                        <div class="mb-3">
                            <label for="titulo-produto" class="form-label">Título do produto</label>
                            <input type="text" class="form-control" id="input-titulo-produto" name="titulo-produto" aria-describedby="emailHelp">
                        </div>  
                        <div class="mb-3">
                            <label for="descricao-produto" class="form-label">Descrição</label>
                            <textarea class="form-control" placeholder="Escreva a descrição do produto..." id="input-descricao-produto" name="descricao-produto" style="height: 100px"></textarea>
                        </div>  
                        <div class="mb-3 col-8 mx-auto">
                            <label for="imagem-produto" class="form-label">Foto do produto</label>
                            <input class="form-control" type="file" id="input-imagem-produto" name="imagem-produto">
                        </div>
                        <div class="mb-3">                             
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="meusProdutos.php" class="btn btn-secondary">Voltar</a>           
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