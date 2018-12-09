<?php		
	include "conexao2.inc";
		
		
	$vemail = @$_POST['email'];
	$vtitulo = @$_POST['titulo'];
	if(($vemail != null) && ($vtitulo != null)){
	$sql="INSERT INTO pedidos VALUES (NULL,'$vemail','$vtitulo')";
	
	$res=mysqli_query($con,$sql);
	
	$num=mysqli_affected_rows($con);
	
	mysqli_close($con);
	}
	
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pedidos</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script src="../script/script.js"></script>
	</head>

	<body class="fundoGeral" onLoad="setBgImg('');">
    	<header class="headerEditar">
       	  <div class="centro">
        		<a class="menuPrincipal" href="inicio.html">Inicio</a>
               	<a class="menuPrincipal" href="projetos.html">Projetos</a>
                <a class="menuPrincipal" href="ilustra.html">Ilustrações</a>
                <a class="menuPrincipal" href="pedidos.php">Pedidos</a>
        	</div>
			<div class="cookieEscolha">
				<form id="escolha">
					Escolha de tema<br/>
					<input type="radio" name="cores" value="natureza" id="tema1" onClick="setBgImg('nat');">Natureza<br/>
					<input type="radio" name="cores" value="escuro" id="tema2" onClick="setBgImg('esc');">Escuro<br/>
					<input type="radio" name="cores" value="claro" id="tema3" onClick="setBgImg('cla');">Claro<br/>
				</form>
			</div>
        </header>    
		<section class="imgSec">
			<center>
				<div class="loginInicio">
				<h1 class="tituloLogin">Pedidos de Novel</h1>
				<form class="formLogin" method="POST" action="pedidos.php">
 				Email:
  				<input type="text" name="email" id="email"><br><br>
  				Titulo:
  				<input type="text" name="titulo" id="titulo"><br><br>
				<input type="submit" name="enviar" value="Enviar">
			</form>
		</div>
				
			</center>
		</section>
		<footer class="rodape">
			<center>
				<h4>
				<br>
					Flávio Augusto Nassor de morais BCC 5ºPeriodo 
					<br>
					Trabalho Professora Janaina Faustino 
				</h4>
			</center>
		</footer>
</body>
</html>
