<?php
 //session_name("doc_oficio");
 //session_start();
 include_once("lib_bd.php");
 $indice = $_GET["indice"];
 $db_inc = abre_banco();
 switch ($indice) {
   //inclui ofício
   case 1:
     $ofi_numero    = $_POST["ofi_numero"];
     $ofi_ano       = $_POST["ofi_ano"];
     $ofi_assunto   = $_POST["ofi_assunto"];
     $ofi_data      = $_POST["ofi_data"];
     $ofi_data      = desformata_data($ofi_data);
     $ofi_destino   = $_POST["ofi_destino"];
     $ofi_autor     = $_POST["ofi_autor"];
     $ofi_matricula = $_POST["ofi_matricula"];
     $ofi_email     = $_POST["ofi_email"];
/*
     $sql = "Insert Into doc_oficio
           (ofi_numero, ofi_ano, ofi_assunto, ofi_data, ofi_destino,
            ofi_autor, ofi_matricula, ofi_email)
           values
           ('$ofi_numero', '$ofi_ano', '$ofi_assunto', '$ofi_data', '$ofi_destino',
            '$ofi_autor', '$ofi_matricula', '$ofi_email')
          ";
      ALTER TABLE doc_oficio AUTO_INCREMENT=81
*/
     $sql = "Insert Into doc_oficio
           (ofi_ano, ofi_assunto, ofi_data, ofi_destino,
            ofi_autor, ofi_matricula, ofi_email)
           values
           ('2016', '$ofi_assunto', '$ofi_data', '$ofi_destino',
            '$ofi_autor', '$ofi_matricula', '$ofi_email')
          ";
     $target = "doc_oficio.php";
   break;
   case 2:
     $ofi_numero = $_GET["ofi_numero"];
     $ofi_ano    = $_GET["ofi_ano"];
     $sql = "Delete  From doc_oficio Where ofi_ano = '$ofi_ano' AND ofi_numero = '$ofi_numero'";
     $target = "doc_oficio.php";
   break;
   case 3:
     $ofi_numero    = $_POST["ofi_numero"];
     $ofi_ano       = $_POST["ofi_ano"];
     $ofi_assunto   = $_POST["ofi_assunto"];
     $ofi_data      = $_POST["ofi_data"];
     $ofi_data      = desformata_data($ofi_data);
     $ofi_destino   = $_POST["ofi_destino"];
     $ofi_autor     = $_POST["ofi_autor"];
     $ofi_matricula = $_POST["ofi_matricula"];
     $ofi_email     = $_POST["ofi_email"];
     $sql = "Update doc_oficio set
               ofi_numero    = '$ofi_numero',
               ofi_ano       = '$ofi_ano',
               ofi_assunto   = '$ofi_assunto',
               ofi_data      = '$ofi_data',
               ofi_destino   = '$ofi_destino',
               ofi_autor     = '$ofi_autor',
               ofi_matricula = '$ofi_matricula',
               ofi_email     = '$ofi_email'
             Where ofi_ano = '$ofi_ano'
               and ofi_numero = '$ofi_numero'
          ";
     $target = "doc_oficio.php";
   break;
 }
 $res_inc = abre_query($db_inc,$sql) or die(mysql_error());
 fecha_banco($db_inc);
 include($target);
?>
