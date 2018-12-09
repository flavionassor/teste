<?php	
	
	include "conexao.inc";
		
	$vnome = @$_POST['login'];
	$vsenha = @$_POST['senha'];
	
	if(($vnome != null) && ($vsenha != null)){
			$sql = "select *from usuarios where login = '$vnome' and senha = '$vsenha'";
	
			$res=mysqli_query($con,$sql);
	
			$linhas=mysqli_num_rows($res);
	
	
			if ($res->num_rows > 0) {
			header("location:paginas/inicio.html");
			}
}
		
	mysqli_close($con);

?>
