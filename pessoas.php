<?php 
//conectamos ao banco de dados
$conexao = new PDO("mysql:host=localhost;dbname=teste","root","");
//criamos a query para pesquisar resultados parecidos com os valores digitados
$sql = $conexao->prepare("SELECT * FROM `pessoas` WHERE nome LIKE '%' '".$_POST['busca']."' '%'");
//executamos a query
$sql->execute();
//selecionamos tudo do banco
$sql2 = $sql->fetchAll();
//percorremos tudo do banco
foreach ($sql2 as $key => $value) {
/*
o echo vai fazer com que retorne 
para a variavel data do ajax
e seja possivel substituir o conteudo
da div de resultados
*/
	echo $value['nome'];
	//aplica quebra de linha a cada resultado
	echo '<hr/>';
};

?>




