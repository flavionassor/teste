<?php
 include "db.php";
 $data=array();
 if(isset($_POST['update']))
 {
 $idp=$_POST['idp'];
 $senhap=$_POST['senhap'];
 $q=mysqli_query($con,"select * from `usuario` where id = '$idp'");
 while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
 }
 ?>