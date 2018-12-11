<?php
 include "db.php";
 $data=array();
 if(isset($_POST['update']))
 {
 $idpend=$_POST['idpend'];
 $senhapend=$_POST['senhapend'];
 $q=mysqli_query($con,"select id ,nome, especialidade, telefone, estado from `usuario` where idcontratado = '-$idpend'");
 while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
 }
 ?>