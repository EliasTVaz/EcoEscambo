<?php 
    session_start();

    //Import do arquivo de layout
    require __DIR__ . '/../assets/Comum/geral.php';
    require __DIR__ . '../../Produtos/Comum/Produto.php'; 
    require __DIR__ . '../../Produtos/Comum/umProduto.php'; 

    $idProdutoTroca = filter_input(INPUT_POST, "idProdutoTroca", FILTER_SANITIZE_NUMBER_INT);
    $idProdutoInteressado = filter_input(INPUT_POST, "idProdutoInteressado", FILTER_SANITIZE_NUMBER_INT);
    
    // Cabeçalho padrão
    imprimeCabecalho('EcoEscambo - Ofertas Recebidas', $_SESSION["usuario"] );
?>
    <main class="mx-auto my-5 col-8">

        <!--Título-->
        <div class="row">
            <h3 class="d-flex justify-content-start">
                Meu produto
            </h3>               
        </div>

        <!--Filtro-->
        <div class="row">
                <div class="card mb-3">
                    <div class="card-body mx-auto">
                        <div class="row d-flex align-items-center">
                            <div class="col-2 d-flex mx-auto justify-content-center">
                                <img src="https://www.webfx.com/wp-content/uploads/2021/10/generic-image-placeholder.png" class="rounded float-start img-fluid" alt="...">                                
                            </div>
                            <div class="col-10 text-start">
                                <h5>Titulo</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officiis accusamus quidem deserunt aut explicabo placeat error vero, rem, saepe esse soluta doloribus tempore deleniti dolor facere incidunt quod inventore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <hr>
        </div>

        <!--List produtos-->
        <div class="container">
            <div class="row p-0 m-0">
                <div class="col col-8 mx-auto px-0">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Interssado</div>
                        </div>
                        <input type="text" class="form-control bg-light" id="inlineFormInputGroup" placeholder="Username" value="Teste" disabled>
                    </div>
                </div>
            </div>
        <?php
            $descricao = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat harum, voluptatem debitis possimus esse iste iusto maiores fuga praesentium a illum suscipit enim consectetur facilis officia ea laborum pariatur qui.";
            imprimeUmProdutoTrocaEscolhido( $idProdutoInteressado, "Teste título de produto - proposta", $descricao );
        ?>
        </div>
        <hr>
    </main>
<?php 
    // Rodapé padrão
    imprimeRodape(); 
?>