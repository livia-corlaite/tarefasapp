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

function CriarChecklist($Descricao,$Prazo)
{
	$conexao=criarConexao();
	$sql= "Insert into Checklist values (null,?,?,'N')";
  $comando= $conexao->prepare($sql);
  $comando->execute
	   (

		   	[
		   		$Descricao,
          $Prazo
		   	]


		);

}

function buscarLista()
{
  $conexao = criarConexao();
  $sql= "SELECT * FROM Checklist";
  $comando= $conexao->query($sql);

  return $comando->fetchAll();

}

function deletar($codigo)
{
  $conexao = criarConexao();
  $sql = "DELETE FROM  Checklist where codigo = ?";
  $comando = $conexao->prepare($sql);
  return $comando->execute(
    [
      $codigo
    ]
  );
}

function Concluir ($codigo)
{
  $conexao = criarConexao();
  $sql = "UPDATE Checklist set concluida= 'S' where Codigo = ?";
  $comando = $conexao->prepare($sql);
  return $comando->execute(
    [
      $codigo
    ]
  );
   
}
 

 ?>