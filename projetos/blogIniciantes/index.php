<?php
    
include_once "./paginas/include/header.php";
include_once "./paginas/include/menuresponsivo.php";

    if (isset($_GET['pg'])) {
        $paginas = $_GET['pg'];

        switch ($paginas) {

            case 'inicial':
                include "./paginas/inicial.php";
                break;
            
            case 'bootstrap':
                include "paginas/bootstrap_1.php" ;
                break;
            
            case 'github':
                include "paginas/github.php";
                break;
            
            case 'codepen':
                include "./paginas/codepen.php";
                break;
            
            case 'sobre':
                include "./paginas/sobre.php";
                break;
            
            case 'contato':
                include "./paginas/contato.php";
                break;

            default:
                echo "pagina não Definida";
                break;
        }

    } else {
        include "./paginas/inicial.php";
    }

    // Footer
include_once "./paginas/include/footer.php";