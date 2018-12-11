<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select id,nome, especialidade, telefone from `usuario` where funcao = '0' and idcontratado = '0'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>