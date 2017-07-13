<?php
    header('Content-Type: application/json');
    include_once("classUsuario.php");
    $login = $_GET["login"]; 
    $senha = $_GET["senha"];     
    $usuario = new Usuario();
    //$usuario = $usuario->logar($login,$senha);
    $usuario->nome = "Rogerio de Leon Pereira";
    $usuario->matricula = "229";
    $usuario->setor = "0303000 - ASP-CPL - COORD. DE PLANOS E INFORMACOES";
    $usuario->login = "rlpereira";
    $usuario->ip = "10.8.0.240";
    echo json_encode($usuario);        
?>