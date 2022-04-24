<?php
    function imprimeCabecalho( $tituloPagina, $usuario )
    {
        echo('<!DOCTYPE html>
            <html lang="pt-br" class="h-100">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>'. $tituloPagina . '</title>'.
                    //Icone da página
                    '<link rel="icon" href="../assets/Icon/people-arrows-left-right-solid.svg" color="white">'.
                    // Bootstrap
                    '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">'.                    
                    // Font Awesome    
                    '<script src="https://kit.fontawesome.com/88a4dc0825.js" crossorigin="anonymous"></script>'.                 
                    // CSS Local
                    '<link rel="stylesheet" href="../assets/css/estilo.css">'.
                    //Scripts
                    '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                </head>

                <body class="d-flex h-100 text-center">
                    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
                        <header class="mb-auto py-3 bg-light">
                            <div class="mx-auto col-8 text-start">
                                <div class="row">
                                    <div class="col col-3">    
                                        <h1>
                                            <i class="fa-solid fa-people-arrows-left-right"></i>
                                            EcoEscambo
                                        </h1>                                        
                                    </div>
                                    <div class="col col-6 d-flex align-self-center text-secondary justify-content-start">
                                        <a href="catalogoProduto.php" class="btn btn-light m-1">Catálogo</a> 
                                        <a href="meusProdutos.php" class="btn btn-light m-1">Meus produtos</a> 
                                    </div>
                                    <div class="col col-3 d-flex align-self-center text-secondary justify-content-end">
                                        <p class="m-2">
                                            Olá, '. $usuario .'
                                        </p>
                                        <a href="../index.php" class="btn btn-secondary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</a> 
                                    </div>     
                                </div>
                            </div>
                        </header>');
    }

    function imprimeCabecalhoLogin( $tituloPagina )
    {
        echo('<!DOCTYPE html>
            <html lang="pt-br" class="h-100">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'. $tituloPagina . '</title>'.
                //Icone da página
                '<link rel="icon" href="../assets/Icon/people-arrows-left-right-solid.svg" color="white">'.
                // Bootstrap
                '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">'.                    
                // Font Awesome    
                '<script src="https://kit.fontawesome.com/88a4dc0825.js" crossorigin="anonymous"></script>'.                 
                // CSS Local
                '<link rel="stylesheet" href="../assets/css/estilo.css">'.
                //Scripts
                '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            </head>
                <body class="d-flex h-100 text-center justify-intems-center">
                    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                        <header class="mb-auto">
                            <h1>
                                <i class="fa-solid fa-people-arrows-left-right"></i>
                                EcoEscambo
                            </h1>
                        </header>');
    }

    function imprimeRodape ()
    {
        echo('
                    <footer class="mt-auto bg-light p-2">'.
                        '<span>Feito por Elias Vaz - 2010478300061 - 2022</span>'.
                    '</footer>'.    
                '</div>'.
            '</body>'.
        '</html>');
    }    

    function imprimePaginacao ()
    {
        echo('
            <div class="row">
                <nav aria-label="" >
                    <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                    </ul>
                </nav>
            </div>
        ');
    }
?>