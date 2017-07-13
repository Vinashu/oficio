<?php
require_once("../classOficio.php");
$oficio = new Doc_Oficio();
echo "Instanciando objeto da classe Oficio.";
echo "<pre>";
print_r($oficio);
echo "</pre>";
echo "<br />";
echo "<hr />";

echo "Salvando objeto.";
$oficio->ofi_ano = "2017";
$oficio->ofi_assunto = "Um assunto";
$oficio->ofi_data = "12/06/2017";
$oficio->ofi_destino = "SETI";
$oficio->ofi_autor = "Rogerio de Leon";
$oficio->ofi_matricula = "229";
$oficio->ofi_email = "rlpereira@uem.br";
$oficio->salvar();
echo "<pre>";
print_r($oficio);
echo "</pre>";
echo "<br />";
echo "<hr />";

echo "Localizando objeto.";
$oficioLocalizar = new Doc_Oficio();
$oficioLocalizar = $oficioLocalizar->localizar($oficio->getId());
echo "<pre>";
print_r($oficioLocalizar);
echo "</pre>";
if ($oficioLocalizar->getId() == $oficio->getId()) {
    echo "Objeto localizado com oucesso...";
} else {
    echo "Objeto NÃO localizado!";    
}
echo "<br />";
echo "<hr />";

echo "Localizando objeto por nome.";
$oficioLocalizarPor = new Doc_Oficio();
$oficioLocalizarPor = $oficioLocalizarPor->localizarPor("ofi_assunto", "'{$oficio->ofi_assunto}'");
echo "<pre>";
print_r($oficioLocalizarPor);
echo "</pre>";
if ($oficioLocalizarPor->getId() == $oficio->getId()) {
    echo "Objeto localizado por nome com sucesso...";
} else {
    echo "Objeto NÃO localizado!";    
}
echo "<br />";
echo "<hr />";

echo "Atualizando objeto.";
$oficioLocalizar->ofi_assunto = "Outro assunto";
$oficioLocalizar->atualizar();
echo "<pre>";
print_r($oficioLocalizar);
echo "</pre>";
if ($oficioLocalizar->ofi_assunto != $oficio->ofi_assunto) {
    echo "Objeto atualizado com oucesso...";
} else {
    echo "Objeto NÃO atualizado!";    
}
echo "<br />";
echo "<hr />";

echo "Deletando objeto.";
$oficioLocalizar->deletar();
$oficioLocalizar = $oficioLocalizar->localizar($oficioLocalizar->getId());
echo "<pre>";
print_r($oficioLocalizar);
echo "</pre>";
echo "<br />";
echo "<hr />";

echo "Listando objetos.";
echo "<pre>";
print_r($oficio->listar());
echo "</pre>";
echo "<br />";
echo "<hr />";
?>