<?php
require_once("config.php");
//require_once("Sql.php");
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search('Usuario');
//echo json_encode($search);

//carrega uma lista
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UM USUÁRIO USANDO LOGIN E SENHA
//$usuario = new Usuario();
//$usuario->login("Usuario", "teste");

//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("Professor","Xavier");

echo $usuario;

?>