<?php
require_once("classBanco.php");
class Doc_Oficio extends Banco {
    public $ofi_numero;
    public $ofi_ano;
    public $ofi_assunto;
    public $ofi_data;
    public $ofi_destino;
    public $ofi_autor;
    public $ofi_matricula;
    public $ofi_email;

    public function __construct(){  
        if($this->ofi_numero != 0){
            $this->formatarId();       
        }     
        /*   
        if($this->ofi_data != 0){
            $this->formatarDataDe();
        } 
        */          
    }

    public function salvar(){
        $this->formatarDataPara();        
        parent::salvar();
    }

    public function atualizar(){
        $this->formatarDataPara();        
        parent::atualizar();
    }    

    public function formatarDataPara(){
        $this->ofi_data = date("Y-m-d", strtotime(str_replace('/','-', $this->ofi_data))); 
    }

    public function formatarDataDe(){
        $this->ofi_data = date("d/m/Y", strtotime(str_replace('-','/', $this->ofi_data))); 
    }

    public function getId(){
        return $this->ofi_numero;
    }

    public function getIdName(){
        return "ofi_numero";
    }

    public function setId($id){
        $this->ofi_numero = $id;
    }

    public function formatarId() {
        $this->ofi_numero = str_pad($this->ofi_numero, 3, '0', STR_PAD_LEFT);    
    }    
/*
    public function mudaAno($ano){
        echo "entrou no mudaAno<br>";
        if ($ano != 0) {
            echo "$ano != 0<br>";            
            $this->schema = "doc_oficio_$ano";
        } else {
            echo "else<br>";                        
            $this->schema = "doc_oficio";            
        }
        echo $this->schema . "<br>";
    }
    */
}
?>