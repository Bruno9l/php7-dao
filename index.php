<?php

require_once("config.php");


//---Carrega um usuario---
//$root = new Usuario(); 
//$root->loadById(3);    
//echo $root;            

//-----------------------------------------------------------

//---Carrega uma lista de todos os usuarios--- 
//$lista = Usuario::getList();
//echo json_encode($lista);

//-----------------------------------------------------------

//---Carrega uma lista de usuarios buscando pelo login---
//$search = Usuario::search("dr");
//echo json_encode($search);

//-----------------------------------------------------------

//---Carrega um usuario usando login e senha---
$usuario = new Usuario();
$usuario->login("root","!@#$%");
echo $usuario;

//-----------------------------------------------------------

//Select simples, usado para testar conexão
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

?>