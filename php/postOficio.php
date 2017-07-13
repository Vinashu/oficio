<?php
    header('Content-Type: application/json');
    include_once("classOficio.php");
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);  
    $oficio = new Doc_Oficio();
    $oficio->ofi_assunto = utf8_decode($request->ofiAssunto);
    $oficio->ofi_autor = $request->ofiAutor;
    $oficio->ofi_data = $request->ofiData;
    $oficio->ofi_destino = utf8_decode($request->ofiDestino);
    $oficio->ofi_email = $request->ofiEmail;
    $oficio->ofi_matricula = $request->ofiMatricula;
    $oficio->ofi_ano = date("Y");
    $oficio->salvar();      
?>