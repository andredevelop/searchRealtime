<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body >

<!-- 
	este input do tipo texto vai receber
	o valor digitado pelo usuário 
-->
<input type="text" id="busca">

<!-- esta div vai receber o resultado da pesquisa -->
<div 
	id="resul"
	style="
	width:50%;
	height:200px;
	border:1px solid black;
	background:#f8f8f8;
	overflow:auto;
	"
></div>

<!-- aqui incluimos a biblioteca do jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<script>
	//inicia a função depois da pagina carregar
	$(function(){
		/*
		chamo o input text e aplico evento keyup
		que verifica se uma tecla foi pressionada
		dentro do campo de texto
		*/
		$('#busca').keyup(function(){
			/*
			chamo ajax
			defino a url como a pagina pessoas
			tipo da requisição é post
			data(valor passado) é o valor do input text
			*/
			$.ajax({
				url:'pessoas.php',
				type:'post',
				data:{busca:$("#busca").val()},
				success:function(data){
					/*
					se tudo der certo o valor que retorna
					vai substituir o que tiver o resultado
					*/
					$('#resul').html(data);
				},error:function(){
					//se der erro exibe isso
					$('#resul').html('Nome não existe');
				}
			})
		})
	})
</script>



</body>
</html>