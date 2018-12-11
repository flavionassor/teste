<?php
include "db.php";
$data=array();
if(isset($_POST['insert']))
{
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$q=mysqli_query($con,"select funcao from `usuario` where senha = '$senha' and nome = '$nome'");
while ($row=mysqli_fetch_object($q)){
$data[]=$row;
}
echo json_encode($data);
}
?>