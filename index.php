<?php
include 'resources/head.php';//chamo o cabeçalho da pagina salvo na pasta resources;
?>
<div class="container"> <!-- crio o container para comportar todas as divs-->
	<div class="row"><!-- crio uma linha para os botoes onde todos os botoes ficam alinhados-->
		<br><!-- Pula linha -->
		<div class="col s2 center"><!-- crio uma div/Coluna, para os botoes nao ficarem juntos onde col s2 significa 2 colunas, e center é para centralizar o botão na div-->
		<a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">add</i></a><!-- Os botoes onde "ADD" é o nome do icone dentro do botão-->
		<h6>Adicionar Produto</h6><!-- Texto abaixo do botão-->
		</div><!-- fecho a div-->
		<div class="col s2 center">
		<a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">delete_forever</i></a>
		<h6>Excluir<br>Produto</h6>
		</div>
		<div class="col s2 center">
		<a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">find_in_page</i></a>
		<h6>Buscar Produto</h6>
		</div>
		<div class="col s2 center">
		<a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">edit</i></a>
		<h6>Editar Produto</h6>
		</div>
		<div class="col s2 center">
		<a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">exposure_plus_1</i></a>
		<h6>Adicionar qtde. Produto</h6>
		</div>
		<div class="col s2 center">
		<a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">remove</i></a>
		<h6>Retirar qtde. Produto</h6>
		</div>
	</div><!-- fecho a div de linha-->
</div><!-- Fecho a div de container-->

<?php
include 'resources/footer.php';//Faço a chamada do footer salvo na pasta resource.
?>
