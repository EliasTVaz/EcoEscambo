<?php 
    session_start();
    //Import do arquivo de layout
    require __DIR__ . '/../assets/Comum/geral.php';   

    //Import do arquivo de layout de produtos
    require __DIR__ . '../../Produtos/Comum/umProduto.php'; 

    // Cabeçalho padrão
    imprimeCabecalho('EcoEscambo - Meus Produtos', $_SESSION["usuario"]);
?>
    <main class="mx-auto my-5 col-8">

        <!--Título-->
        <div class="row">
            <h3 class="d-flex justify-content-start">
                Meus Produtos
            </h3>               
        </div>

        <!--Filtro-->
        <div class="row">
            <div class="col col-6 form-check d-flex justify-content-start px-3">
                <form>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                        <label class="form-check-label" for="inlineRadio1">Todos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Meus interesses</label>
                    </div>
                </form>
            </div>
            <div class="col col-6 d-flex justify-content-end">
                <a href="cadastroProduto.php" class="btn"><i class="fa-solid fa-plus"></i> Novo produtos</a>
            </div>
            <hr>
        </div>

        <!--List produtos-->
            <div class="container">
                <?php 
                    $arrProdutos = array(
                        array("usuario" => "Usuario de teste", "idProduto" => 15, "ehInteressado" => true),
                        array("usuario" => "Usuario de teste", "idProduto" => 12, "ehInteressado" => true),
                        array("usuario" => "Usuario de teste", "idProduto" => 45, "ehInteressado" => false),
                        array("usuario" => "Usuario de teste", "idProduto" => 01, "ehInteressado" => false),
                        array("usuario" => "Usuario de teste", "idProduto" => 64, "ehInteressado" => true),
                    );
    
                    foreach( $arrProdutos as $umProduto ) 
                    {    
                        imprimeUmProdutoUsuario( $umProduto["ehInteressado"] , $umProduto["idProduto"]);
                    }
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