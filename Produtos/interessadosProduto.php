<?php 
    session_start();

    //Import do arquivo de layout
    require __DIR__ . '/../assets/Comum/geral.php';
    require __DIR__ . '../../Produtos/Comum/Produto.php'; 
    require __DIR__ . '../../Produtos/Comum/umProduto.php'; 

    $idProdutoUsusario = filter_input(INPUT_POST, "idProduto", FILTER_SANITIZE_NUMBER_INT);
    
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
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Interessados</label>
                        <select class="form-select " id="inputGroupSelect01" name="idUsuario">
                            <option value="1">Pedro</option>
                            <option value="2">Isabela</option>
                            <option value="3">Maria</option>
                        </select>
                    </div>
                </div>
            </div>
            <?php
                $descricao = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat harum, voluptatem debitis possimus esse iste iusto maiores fuga praesentium a illum suscipit enim consectetur facilis officia ea laborum pariatur qui!";

                imprimeUmProdutoTroca( "Teste 1", "Teste de decrição", $idProdutoUsusario, 90 );
                imprimeUmProdutoTroca( "Teste de título", $descricao.$descricao, $idProdutoUsusario, 95 );
                imprimeUmProdutoTroca( "Teste 3", $descricao, $idProdutoUsusario, 80 );
            ?>
        </div>
        <hr>

        <!--Paginação-->
        <?php
            imprimePaginacao();
        ?>
    </main>
<?php 
    // Rodapé padrão
    imprimeRodape(); 
?>