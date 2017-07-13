<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
  <HEAD>
    <TITLE>Documentos - Ofícios GRE/ASP</TITLE>

    <style type="text/css">@import "http://www.uem.br/mambots/system/coredesign/css/coredesign.css";</style>
    <link rel="shortcut icon" href="http://www.uem.br/images/favicon.ico" />

    <link href="http://www.asp.uem.br/site/templates/ja_xenia_ii/css/template_css.css" rel="stylesheet" type="text/css" />
    <link href="http://www.asp.uem.br/site/templates/ja_xenia_ii/css/ja-vm.css" rel="stylesheet" type="text/css" />
    <link href="http://www.asp.uem.br/site/templates/ja_xenia_ii/css/colors/default.css" rel="stylesheet" type="text/css" />
    <link href="http://www.asp.uem.br/site/templates/ja_xenia_ii/css/ja-news.css" rel="stylesheet" type="text/css" />
    
    <META http-equiv=Content-Language content=pt-br>
    <META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
    <!--
    <LINK href="estilo.css" type=TEXT/CSS rel=stylesheet>
    -->
    <SCRIPT language="javascript" type="text/javascript" src="ajax.js"></SCRIPT>
    <link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-blue2.css" title="calendar-blue2" />
    <!--
      calendar-blue
      calendar-blue2
      calendar-brown
      calendar-green
      calendar-system
      calendar-tas
      calendar-win2k-1
      calendar-win2k-2
      calendar-cold-win2k-1
      calendar-cold-win2k-2
    -->
    <script type="text/javascript" src="jscalendar/calendar.js"></script>
    <script type="text/javascript" src="jscalendar/lang/calendar-br.js"></script>
    <script type="text/javascript" src="jscalendar/calendar-setup.js"></script>

    <META content="Rogério JOSHUA de Leon Pereira" name=author>
  </HEAD>
  <BODY onload="document.forms[0].ofi_numero.focus();">
<CENTER>
<?php
 session_name("doc_oficio");
 session_start();
 include_once("lib_bd.php");
 $usuario = $_SESSION['s_nome'];
 $matricula = $_SESSION['s_matricula'];
 $email = $_SESSION['s_login'] . "@uem.br";
 /*
 $usuario = "Rogério de Leon Pereira";
 $matricula = "229";
 $email = "rlpereira@uem.br";
 */
 $ordem = $_GET["ordem"];
 $ano = $_GET["ano"];
 if ($ordem == "") {
   $ordem = " Order By ofi_ano DESC, ofi_numero DESC";
 }
 $hoje = date("d/m/Y");
 $db = abre_banco();
 $sql = "Select max(ofi_numero) as maior From doc_oficio";
 $res = abre_query($db,$sql) or die(mysql_error());
 $data = mysql_fetch_array($res);
 $numero = $data["maior"] + 1;
     ECHO "
     <table border=1>
       <tr>
         <td colspan=6 align=center>
           <H1>Documentos - Ofícios GRE/ASP $ano</H1>
         </td>
       </tr>
       <tr>
         <td>
            <b><a href='doc_oficio_generico.php?ano=$ano&ordem=Order by ofi_numero DESC'>Número</a></b>
         </td>
         <td>
            <img src='imagens/calendar.png' alt='Data'>
            <b><a href='doc_oficio_generico.php?ano=$ano&ordem=Order by ofi_data DESC'>Data</a></b>
         </td>
         <td>
            <img src='imagens/jogadores.png' alt='Destinatário'>
            <b><a href='doc_oficio_generico.php?ano=$ano&ordem=Order by ofi_destino ASC'>Destinatário</a></b>
         </td>
         <td>
            <b>Assunto</b>
         </td>
         <td>
            <b>Emitente</b>
         </td>
         <td>
            <img src='imagens/tools.png' alt='Comandos'>
            <b>Comandos</b>
         </td>
       </tr>
       ";

     $sql = "Select * From doc_oficio_$ano " . $ordem;
     $res = abre_query($db,$sql) or die(mysql_error());
     while ($data = mysql_fetch_array($res)) {
       $ofi_numero    = $data["ofi_numero"];
       $ofi_ano       = $data["ofi_ano"];
       $ofi_assunto   = $data["ofi_assunto"];
       $ofi_data      = $data["ofi_data"];
       $ofi_data      = formata_data($ofi_data);
       $ofi_destino   = $data["ofi_destino"];
       $ofi_autor     = $data["ofi_autor"];
       $ofi_matricula = $data["ofi_matricula"];
       $ofi_email     = $data["ofi_email"];
       ECHO "
             <div id='id$ofi_numero/$ofi_ano'>
             <tr>
               <td>
                   $ofi_numero/$ofi_ano
               </td>
               <td>
                   $ofi_data
               </td>
               <td>
                   $ofi_destino
               </td>
               <td>
                   $ofi_assunto
               </td>
               <td>
                   <a href='mailto:$ofi_email'>$ofi_autor</a>
               </td>
               <td>
                 <!--
                 <a href='#' onclick=\"javascript:doc_frwk(1, $ofi_ano, $ofi_numero,'')\"><img src='imagens/editar_nego.png' alt='Editar'></a>
                 <a href='pre_alterar.php?ofi_ano=$ofi_ano&ofi_numero=$ofi_numero'><img src='imagens/editar_nego.png' alt='Editar'></a>
                 <a href='#' onclick=\"javascript:confirma($ofi_ano,$ofi_numero)\"><img src='imagens/apagar.png' alt='Apagar'></a>
                 <a href='docs/$ofi_numero-$ofi_ano.doc'><img src='imagens/word.png' alt='Abrir Documento'></a>
                 -->
                 <img src='imagens/apagar.png' alt='Apagar'>
                 <img src='imagens/word.png' alt='Abrir Documento'>
               </td>
            </tr>
            </div>
       ";
     }
      ECHO "
     </table>
     <P>
     <a href='index.htm'>voltar</a>
     <P>
     <small>versão 0.2.0 by <b><a href='mailto:rlpereira@uem.br'>Rogério de Leon Pereira</a></b></small>
     ";

?>
</CENTER>
</BODY>
</HTML>
