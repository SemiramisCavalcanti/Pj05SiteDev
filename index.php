<?php

$pg = isset($_GET['pg']);

if ($pg) {

    //PAGINA INDEX DO SITE PRINCIPAL

    switch ($_GET['pg']) {

        case 'estudosEprojetos':
            include_once 'paginas/include/header.php';
            include_once 'paginas/inicial.php';
            include_once 'paginas/include/footer.php';
            break;

        case 

    
        
            // FIM PAGINA INDEX DO SITE PRINCIPAL

        default:
            include_once 'paginas/include/header.php';
            include_once 'paginas/inicial.php';
            include_once 'paginas/include/footer.php';
            break;
    }
} else {
    //não existe   
    include_once 'aginas/include/header.php';
    include_once 'paginas/inicial.php';
    include_once 'paginas/include/footer.php';
}
