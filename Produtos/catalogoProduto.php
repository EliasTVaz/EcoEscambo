<?php 
    session_start();

    //Import do arquivo de layout
    require __DIR__ . '/../assets/Comum/geral.php';
    require __DIR__ . '../../Produtos/Comum/Produto.php'; 
    require __DIR__ . '../../Produtos/Comum/umProduto.php'; 

    // Cabeçalho padrão
    imprimeCabecalho('EcoEscambo - Catálogo', $_SESSION["usuario"] );

?>
    <main class="mx-auto my-5 col-8">

        <!--Título-->
        <div class="row">
            <h3 class="d-flex justify-content-start">
                Catálogo
            </h3>               
        </div>

        <!--Filtro-->
        <div class="row">
            <div class="form-check d-flex justify-content-start px-3">
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
            <hr>
        </div>

        <!--List produtos-->
        <div class="container">
            <?php   

                $arrProdutos = array(
                    array("usuario" => $_SESSION["idUsuario"], "titulo" => "Titulo teste 1", "descricao" => "Lorem ipsun", "ehInteressado" => true),
                    array("usuario" => $_SESSION["idUsuario"], "titulo" => "Titulo teste 1", "descricao" => "Lorem ipsun", "ehInteressado" => false),
                    array("usuario" => 002, "titulo" => "Titulo teste 1", "descricao" => "Lorem ipsun", "ehInteressado" => true),
                    array("usuario" => 007, "titulo" => "Titulo teste 1", "descricao" => "Lorem ipsun", "ehInteressado" => true),
                    array("usuario" => 022, "titulo" => "Titulo teste 1", "descricao" => "Lorem ipsun", "ehInteressado" => false),
                    array("usuario" => 054, "titulo" => "Titulo teste 1", "descricao" => "Lorem ipsun", "ehInteressado" => false),
                    array("usuario" => 022, "titulo" => "Titulo teste 1", "descricao" => "Lorem ipsun", "ehInteressado" => true),
                );
                
                foreach( $arrProdutos as $umProduto ) 
                {

                    imprimeUmProduto( $umProduto["usuario"] , $umProduto["titulo"], $umProduto["descricao"], $umProduto["ehInteressado"] );
                }
            ?>
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