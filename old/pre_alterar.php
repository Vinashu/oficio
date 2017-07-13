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

    <META content="Rogério de Leon Pereira" name=author>
  </HEAD>
  <BODY onload="document.forms[0].ofi_numero.focus();">
<CENTER>

<?PHP
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

  $ano = $_GET['ofi_ano'];
  $numero = $_GET['ofi_numero'];

  $db_alt = abre_banco();
  $sql_alt = "Select * From doc_oficio Where ofi_ano = '$ano' AND ofi_numero = '$numero'";
  $res_alt = abre_query($db_alt,$sql_alt) or die(mysql_error());
  $data_alt = mysql_fetch_array($res_alt);
  $ofi_numero    = $data_alt["ofi_numero"];
  $ofi_ano       = $data_alt["ofi_ano"];
  $ofi_assunto   = $data_alt["ofi_assunto"];
  $ofi_data      = $data_alt["ofi_data"];
  $ofi_data      = formata_data($ofi_data);
  $ofi_destino   = $data_alt["ofi_destino"];
  /*
  $ofi_autor     = $data_alt["ofi_autor"];
  $ofi_matricula = $data_alt["ofi_matricula"];
  $ofi_email     = $data_alt["ofi_email"];
  */

  Echo "
      <table border=1>
       <tr>
         <td colspan=6 align=center>
           <H1>Documentos - Ofícios GRE/ASP</H1>
         </td>
       </tr>
       <tr>
         <td>
            <b><a href='doc_oficio.php?ordem=Order by ofi_numero DESC'>Número</a></b>
         </td>
         <td>
            <img src='imagens/calendar.png' alt='Data'>
            <b><a href='doc_oficio.php?ordem=Order by ofi_data DESC'>Data</a></b>
         </td>
         <td>
            <img src='imagens/jogadores.png' alt='Destinatário'>
            <b><a href='doc_oficio.php?ordem=Order by ofi_destino ASC'>Destinatário</a></b>
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
       <form action=incluir.php?indice=3 method=post>
        <tr>
         <td>
           <input type=text name=ofi_numero size=4 value='$ofi_numero'>/<input type=text name=ofi_ano value='$ofi_ano' size=4>
         </td>
         <td>
           <input type=text name=ofi_data size=10 id='alterar' value='$ofi_data'>
           <button type=reset id=trigger>...</button>
           <script type=\"text/javascript\">
             Calendar.setup(
             {
               inputField : 'alterar', // ID of the input field
               ifFormat : '%d/%m/%Y', // the date format
               button : 'trigger', // ID of the button
               align : 'br',
               singleclick: true
             }
             );
           </script>
         </td>
         <td>
           <input type=text name=ofi_destino value='$ofi_destino' size=32>
         </td>
         <td>
           <input type=text name=ofi_assunto value='$ofi_assunto' size=64>
         </td>
         <td>
           $usuario
           <input type=hidden name=ofi_matricula value='$matricula'>
           <input type=hidden name=ofi_autor value='$usuario'>
           <input type=hidden name=ofi_email value='$email'>
         </td>
         <td align=center>
           <input type=submit value=Alterar>
         </td>
        </tr>
       </form>
       </table>
       <P>
       <a href='doc_oficio.php'>voltar</a>
  ";
  fecha_banco($data_alt);
  $sql_alt = "";
?>
