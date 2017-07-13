<?php
    header('Content-type: text/html; charset=UTF-8') ;
    header('Content-Type: application/json');
    include_once("classOficio.php");     
    $oficios = new Doc_Oficio();  
    $oficios = $oficios->listar();
    foreach($oficios as $oficio){
        $oficio->ofi_assunto = utf8_encode($oficio->ofi_assunto);
        $oficio->ofi_destino = utf8_encode($oficio->ofi_destino);        
        $oficio->ofi_autor = utf8_encode($oficio->ofi_autor);              
    }
    echo(json_encode($oficios)); 
    /*
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - No errors';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
        break;
        default:
            echo ' - Unknown error';
        break;
    }
    */
?>