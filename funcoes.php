<?php 

function criarConexao()
{
   $banco= "Checklist";
   $usuario= "Checklist";
   $senha= "senha123";
   $conexao= new PDO("mysql:host=localhost;dbname=${banco}",
   	   $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

   return $conexao;


}

function CriarChecklist($Descricao)
{
	$conexao=criarConexao();
	$sql= "Insert into Checklist values (null,?,?)";
	$comando= $conexao->execute
	   (

		   	[
		   		$Descricao
		   	]


		);

}

function buscarLista()
{
  $conexao = criarConexao();
  $sql= "SELECT * fROM Checklist";
  $comando= $conexao->query($sql);

  return $comando->fetchAll();

}


 ?>