<?php
    header('Content-Type: application/json');
    include_once("classOficio.php");
    $postdata = file_get_contents("php://input");
    //$postdata = '{"id":"00029","titulo":"Ble ble x","dataCadastro":"30/11/2017","tipoDocumento":{"id":"4","nome":"Outros"},"qtdTramites":"0"}';
    $request = json_decode($postdata);      
    $oficio = new Doc_Oficio();
    $oficio = $oficio->localizar($request->ofiNumero);
    $oficio->ofi_destino = utf8_decode($request->ofiDestino);
    $oficio->ofi_assunto = utf8_decode($request->ofiAssunto);
    $oficio->ofi_data    = $request->ofiData;
    $oficio->atualizar();          
?>