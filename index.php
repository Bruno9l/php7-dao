<?php

require_once("config.php");

$root = new Usuario();
$root->loadById(3);

echo $root;







/////////////////////////////////////////////////////////
//Select simples, usado para testar conexão

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
////////////////////////////////////////////////////////
?>