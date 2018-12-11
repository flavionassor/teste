<?php
include "db.php";
$data=array();
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$q=mysqli_query($con,"select * from `usuario` where senha = '1'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>