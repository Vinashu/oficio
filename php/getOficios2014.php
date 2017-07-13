<?php
    header('Content-type: text/html; charset=UTF-8') ;
    header('Content-Type: application/json');
    include_once("classOficio2014.php");     
    $oficios = new Doc_Oficio_2014();  
    $oficios = $oficios->listar();
    foreach($oficios as $oficio){
        $oficio->ofi_assunto = utf8_encode($oficio->ofi_assunto);
        $oficio->ofi_destino = utf8_encode($oficio->ofi_destino);        
        $oficio->ofi_autor = utf8_encode($oficio->ofi_autor);              
    }
    echo(json_encode($oficios)); 
?>