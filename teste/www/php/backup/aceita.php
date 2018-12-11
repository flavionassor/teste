<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nome=$_POST['nome'];
 $nomeconfirma=$_POST['nomeconfirma'];
 $especialidade=$_POST['especialidade'];
 $telefone=$_POST['telefone'];
 $q=mysqli_query($con,"UPDATE `usuario` SET `idcontratado`='0' where `idcontratado`='-$nomeconfirma' and `id` = '$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>