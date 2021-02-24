<?php
include '../banco/conectaBanco.php';
if(isset($_POST["parametroDeBusca"]) && isset($_POST["dadoParaBusca"]))
{
$parametro = $_POST["parametroDeBusca"];
$dadoParaBuscar = $_POST["dadoParaBusca"];

$stmt = $conexao->prepare("SELECT * FROM acervo WHERE ".$parametro. " LIKE '%".$dadoParaBuscar."%'");


$stmt->execute();

}
else
{
	header('Location:../html/consultarAcervo.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca sys - LISTA DE LIVROS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div>
		<h1 class="display-4" style="text-align: center;">Biblioteca sys</h1>
	</div>
	<div>
		<<h2 style="text-align: center;">Lista De Livros</h2>

	<div>
		
<?php 
if($stmt->rowCount()>0){
?>
<br><br>
		<table class="container col-7 table table-striped " style="box-shadow: 1px 1px 30px 0px rgba(0,0,0,0.75);">
			<thead>
				<tr>
					<th scope="col">Titulo</th>
					<th scope="col">Autor</th>
					<th scope="col">Editora</th>
					<th scope="col">Quantitade de Livros</th>
				</tr>
			</thead>
			<tbody>
		<?php
		$resultado = $stmt->fetchAll();
			foreach($resultado as $linha)
			{ 

	    		echo"<tr scope='row'>
	                <td>".$linha['titulo']."</td>
	                <td>".$linha['autor']."</td>
	                <td>".$linha['editora']."</td>
	                <td>".$linha['quantidade']."</td>
	            </tr> ";
        	}

?>
			</tbody>
		</table>
	</div>
	</div>
<?php }
else
{
	echo "Nenhum livro encontrado revise os parâmetros de busca!";
}?>
<br>
<div class="col-5 container">
<button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='consultarAcervo.html';"><strong>FAZER NOVA CONSULTA</strong></button>
</div>
</body>
</html>