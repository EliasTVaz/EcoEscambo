<?php 

    //Variáveis
    //-----------------------------------------------------------------------------------------------
        $btnInteresse;
        $btnEditar;
        $btnExcluir;
        $btnVerInteressados;
    //-----------------------------------------------------------------------------------------------

    function imprimeUmProduto( $usuario, $tituloProduto, $descricaoProduto, $ehInteressado )
    {

        if ( $usuario != $_SESSION["idUsuario"] )
        {   
            if ( $ehInteressado )
            {
                $btnInteresse   =   '<div class="row">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                            Tirar interesse
                                        </button>
                                    </div>';
            }
            else
            {
                $btnInteresse   =   '<div class="row">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa-solid fa-circle-plus"></i>
                                            Tenho interesse
                                        </button>
                                    </div>';
            }

            echo('
                <div class="card my-1">
                    <div class="card-body mx-auto">
                        <div class="row d-flex align-items-center">
                            <div class="col-2 d-flex mx-auto justify-content-center">
                                <img src="https://www.webfx.com/wp-content/uploads/2021/10/generic-image-placeholder.png" class="rounded float-start img-fluid" alt="...">                                
                            </div>
                            <div class="col-8 text-start">
                                <h5>Titulo</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officiis accusamus quidem deserunt aut explicabo placeat error vero, rem, saepe esse soluta doloribus tempore deleniti dolor facere incidunt quod inventore.</p>
                            </div>
                            <div class="col-2 p-4">'.
                                $btnInteresse
                            .'</div>
                        </div>
                    </div>
                </div>
            ');
        }
        
    }

    function imprimeUmProdutoUsuario( $ehSemInteressado, $idProduto )
    {
        $btnExcluir             =   '<form action="" method="post">
                                        <input type="hidden" name="idProduto" value="' . $idProduto . '">
                                        <div class="row">
                                            <button type="submit" class="btn btn-danger mb-2">
                                                <i class="fa-solid fa-ban"></i>    
                                                Excluir
                                            </button>
                                        </div>
                                    </form>';
        $btnEditar              =   '<form action="" method="post">
                                        <input type="hidden" name="idProduto" value="' . $idProduto . '">
                                        <div class="row">
                                            <button type="submit" class="btn btn-secondary mb-2">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Editar
                                            </button>
                                        </div>
                                    </form>';

        $btnVerInteressados    =   '<form action="interessadosProduto.php" method="post">
                                        <input type="hidden" name="idProduto" value="' . $idProduto . '">
                                        <div class="row">                           
                                            <button type="submit" class="btn btn-primary mb-2"> 
                                                <i class="fa-solid fa-person-booth"></i> 
                                                interessados
                                            </button>
                                        </div>
                                    </form>';

        echo('
            <div class="card my-1">
                <div class="card-body mx-auto">
                    <div class="row d-flex align-items-center">
                        <div class="col-2 d-flex mx-auto justify-content-center">
                            <img src="https://www.webfx.com/wp-content/uploads/2021/10/generic-image-placeholder.png" class="rounded float-start img-fluid" alt="...">                                
                        </div>
                        <div class="col-8 text-start">
                            <h5>Titulo</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officiis accusamus quidem deserunt aut explicabo placeat error vero, rem, saepe esse soluta doloribus tempore deleniti dolor facere incidunt quod inventore.</p>
                        </div>
                        <div class="col-2 p-4">');
                            if ( $ehSemInteressado ){
                                echo( $btnEditar );
                            }   
                            else
                            {
                                echo( $btnVerInteressados );
                            } 
        echo(
                        $btnExcluir
                        .'</div>
                    </div>
                </div>
            </div>
        ');        
    }

    function imprimeUmProdutoTroca( $titulo, $descricao, $idProdutoTroca, $idProdutoInteressado )
    {
        echo('
            <div class="row">
                <div class="col col-12">
                    <div class="col col-8 mx-auto">
                        <div class="card mb-1">
                            <div class="card-body mx-auto col col-12">
                                <div class="row align-items-center">
                                    <div class="col-2 mx-auto">
                                        <img src="https://www.webfx.com/wp-content/uploads/2021/10/generic-image-placeholder.png" class="rounded float-start img-fluid" alt="...">                                
                                    </div>
                                    <div class="col-8 text-start">
                                        <h5>' . $titulo . '</h5>
                                        <p>' . $descricao . '</p>
                                    </div>
                                    <div class="col col-2">
                                        <form action="trocaProduto.php">
                                            <input type="hidden" name="idProdutoTroca" value="' . $idProdutoTroca . '">
                                            <input type="hidden" name="idProdutoInteressado" value="' . $idProdutoInteressado . '">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa-solid fa-people-carry-box"></i>
                                                Propor
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ');
    }

    function imprimeUmProdutoTrocaEscolhido( $idProduto, $titulo, $descricao )
    {
        echo('
            <div class="row">
                <div class="col col-12">
                    <div class="col col-8 mx-auto d-flex justify-content-center">
                        <div class="card mb-3">
                            <div class="card-body mx-auto">
                                <div class="row d-flex align-items-center">
                                    <div class="col-2 mx-auto">
                                        <img src="https://www.webfx.com/wp-content/uploads/2021/10/generic-image-placeholder.png" class="rounded float-start img-fluid" alt="...">                                
                                    </div>
                                    <div class="col-10 text-start">
                                        <h5>' . $titulo . '</h5>
                                        <p>' . $descricao . '</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">            
                <div class="col col-8 mx-auto d-flex justify-content-center">
                    <form action="">
                        <input type="hidden" name="idProduto" value="' . $idProduto . '">
                        <button type="submit" class="btn btn-success mx-2">
                            <i class="fa-solid fa-circle-check mx-1"></i>
                            Aceitar
                        </button>
                    </form>
                    <form action="interessadosProduto.php">
                        <input type="hidden" name="idProduto" value="' . $idProduto . '">
                        <button type="submit" class="btn btn-danger mx-2">
                            <i class="fa-solid fa-ban mx-1"></i>
                            Recusar
                        </button>
                    </form>
                </div>
            </div>
        ');
    }
    
?>