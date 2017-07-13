<?php
   function abre_query ($db,$sql) {
      $res = mysql_query ($sql,$db);
      return $res;
   }
   function abre_banco () {
      $db = mysql_connect("localhost", "asp", "Caneta23");
      $test = mysql_select_db ("asp", $db);
      return $db;
   }
   function fecha_banco ($db) {
      mysql_close($db);
   }
  function formata_data($valor){
   list ($ano, $mes, $dia) = split ('[/.-]', $valor);
   return $dia . "/" . $mes . "/" . $ano;
  }
  function desformata_data($valor){
   list ($dia, $mes, $ano) = split ('[/.-]', $valor);
   return $ano . "-" . $mes . "-" . $dia;
  }
?>
