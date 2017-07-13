<?php
class Banco {
    protected static $server = "localhost";
    protected static $user = "root";
    protected static $pwd = "";
    protected static $schema = "doc_oficio";

    public function conectar(){           
        $db = mysqli_connect(self::$server, self::$user, self::$pwd, self::$schema);         
        if (!$db) {
            die('Não foi possível conectar: ' . mysqli_error());
        }           
        return $db;        
    }
    
    public function desconectar($db){
        mysqli_close($db);
    }
    
    public function localizar($id){
        $idName = $this->getIdName();
        $sql = "select * from " . get_class($this) . " where $idName = " . $id;
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        if (!$res) {
            die('Query inválida: ' . mysqli_error());
        }        
        $data = mysqli_fetch_object($res, get_class($this));                  
        $this->desconectar($db);       
        return $data;
    }
  
    public function salvar(){
        $campos = get_object_vars($this);  
        $sqlStart = "INSERT INTO " . get_class($this) . " (";
        $sqlEnd = ") VALUES (";    
        foreach($campos as $key => $value){
            $sqlStart .= $key . ",";
            if(!is_object($campos[$key])){
                $sqlEnd .= "'" . $value . "',";    
            } else {
                $sqlEnd .= "'" . $campos[$key]->getId() . "',";
            }            
        }                   
        $sql =  substr($sqlStart,0,strlen($sqlStart)-1) . substr($sqlEnd,0,strlen($sqlEnd)-1) . ")";
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        if (!$res) {
            die('Query inválida: ' . $sql . mysqli_error());
        }           
        $id = mysqli_insert_id($db);
        $this->desconectar($db);       
        $this->setId($id);
    }
    
    public function atualizar(){
        $idName = $this->getIdName();        
        $campos = get_object_vars($this);  
        $sql = "UPDATE " . get_class($this) . " SET ";
        foreach($campos as $key => $value){
            if(!is_object($campos[$key])){
                $sql .= $key . " = '$value',";
            } else {
                $sql .= $key . " = '" . $campos[$key]->getId() ."',";                
            }
        }                   
        $sql =  substr($sql,0,strlen($sql)-1);
        $sql .= "WHERE $idName = " . $this->getId();
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        if (!$res) {
            die('Query inválida: ' . mysqli_error());
        }           
        $this->desconectar($db);               
    }

    public function atualizarPor($id, $valor){
        $campos = get_object_vars($this);  
        $sql = "UPDATE " . get_class($this) . " SET ";
        foreach($campos as $key => $value){
            if(!is_object($campos[$key])){
                $sql .= $key . " = '$value',";
            } else {
                $sql .= $key . " = '" . $campos[$key]->getId() ."',";                
            }
        }                   
        $sql =  substr($sql,0,strlen($sql)-1);
        $sql .= "WHERE $id = " . $valor;
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        if (!$res) {
            die('Query inválida: ' . mysqli_error());
        }           
        $this->desconectar($db);               
    }    
    
    public function listar(){
          $sql = "Select * from " . get_class($this);
          $db = $this->conectar();
          $res = mysqli_query($db,$sql);
          $this->desconectar($db);
          $linhas = array();
          while($linha = mysqli_fetch_object($res,get_class($this)))        
          {
              $linhas[] = $linha;
          }
          mysqli_free_result($res);                
          return($linhas);
    }    

    public function listarPor($campo, $valor){
        $sql = "select * from " . get_class($this) . " where $campo = " . $valor;
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        $this->desconectar($db);
        $linhas = array();
        while($linha = mysqli_fetch_object($res,get_class($this)))        
        {
            $linhas[] = $linha;
        }
        mysqli_free_result($res);                
        return($linhas);
    }  

    public function localizarPor($campo, $valor){
        $sql = "select * from " . get_class($this) . " where $campo = " . $valor ;
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        $this->desconectar($db);
        if($res){
            $linha = mysqli_fetch_object($res,get_class($this));
            mysqli_free_result($res);                            
        } else {
            $linha = "";
        }
        return($linha);
    }          
    
    public function deletar(){
        $idName = $this->getIdName();        
        $sql = "Delete from " . get_class($this) . " where $idName = " . $this->getId();
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        $this->desconectar($db);
    }

    public function deletarPor($campo, $valor){
        $sql = "Delete from " . get_class($this) . " where $campo = " . $valor;
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        $this->desconectar($db);
    }        

    public function limpar(){
        $campos = get_object_vars ($this);
        foreach ($campos as $key => $value) {
           $this->$key = "";
        }
    }    

    public function getId(){
        return $this->id;
    }

    public function getIdName(){
        return "id";
    }    

    public function setId($id){
        $this->id = $id;
    }            
}
?>