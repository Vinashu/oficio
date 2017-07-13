<?php
  session_name("doc_oficio");
  session_start();
  $login = $_POST['usuario'];
  $senha = $_POST['senha'];
  if($login == "" || $senha == ""){
    echo "<meta http-equiv='REFRESH' content='0; url=index.htm'>";
    exit;
  }else{
    $ldaprdn  = "uid=$login,ou=People,dc=uem,dc=br";
    $ldappass = $senha;
    // conecta
    $ldapconn = ldap_connect("ldap://ldap.uem.br") or exit("Não foi possível conectar com o servidor LDAP.");
    // valida e publica
    if($ldapconn)
      $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
    // se não validou volta, se validou entra
    if(!$ldapbind){
      echo "<meta http-equiv='REFRESH' content='5; url=./index.htm'>";
      echo "<font color='red'><br>Login ou Senha Invalida!</font>";
      exit();
    }else{
      $attr = array('uid', 'dn', 'cn', 'employeenumber', 'employeetype', 'departmentnumber');
      $sr   = ldap_list($ldapconn, "ou=People,dc=uem,dc=br", "(uid=$login)", $attr);
      $info = ldap_get_entries($ldapconn, $sr);
      $nome      = $info[0]['cn'][0];
      $matricula = $info[0]['employeenumber'][0];
      $setor     = $info[0]['departmentnumber'][0];
      // salva dados do usuário na sessão
      $_SESSION['s_login']     = $login;
      $_SESSION['s_nome']      = $nome;
      $_SESSION['s_matricula'] = $matricula;
      $_SESSION['s_tipo']      = $tipo;
      $_SESSION['s_setor']     = $setor;
      $_SESSION['s_ip']        = $ip = getenv('REMOTE_ADDR');
      $_SESSION['s_servidor']  = $servidor = gethostbyaddr($ip);
      include("doc_oficio.php");
    }
  }
?>
