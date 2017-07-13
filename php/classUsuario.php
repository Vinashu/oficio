<?php
class Usuario {
    public $nome;
    public $matricula;
    public $setor;
    public $login;
    public $ip;
    public $servidor;

    public function logar($login, $senha) {
        $ldaprdn  = "uid=$login,ou=People,dc=uem,dc=br";
        $ldappass = $senha;
        // conecta
        $ldapconn = ldap_connect("ldap://ldap.uem.br") or exit("N�o foi poss�vel conectar com o servidor LDAP.");
        // valida e publica
        if($ldapconn)
        $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
        // se validou entra
        if($ldapbind){
            $attr = array('uid', 'dn', 'cn', 'employeenumber', 'employeetype', 'departmentnumber');
            $sr   = ldap_list($ldapconn, "ou=People,dc=uem,dc=br", "(uid=$login)", $attr);
            $info = ldap_get_entries($ldapconn, $sr);
            $this->nome      = $info[0]['cn'][0];
            $this->matricula = $info[0]['employeenumber'][0];
            $this->setor     = $info[0]['departmentnumber'][0];
            $this->login     = $login;            
            $this->ip        = getenv('REMOTE_ADDR');
            $this->servidor  = gethostbyaddr($ip);
        }
        return $this;
    }        
}
?>