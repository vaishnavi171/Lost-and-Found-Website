<?php
$vehicleno = $_POST['vehicleno'];
$vehicle_color = $_POST['vehicle_color'];
$vehicle_type = $_POST['vehicle_type'];
$vmodel = $_POST['vmodel'];
$phoneno = $_POST['phoneno'];

if (!empty($vehicle_type)  || !empty($vehicleno) ||  !empty($vmodel) || !empty($vehicle_color) ||!empty($phoneno))
{
 
 $conn = new mysqli('localhost','root','','web1');
 if ($conn->connect_error) {
  die('Connect Error'.$conn->connect_error);
 }else{
  
  $stmt = $conn->prepare("insert into vehicle values(?,?,?,?,?)");
  $stmt->bind_param("sssss",$vehicleno,$vehicle_color,$vehicle_type,$vmodel,$phoneno);
  echo '<script type="text/javascript">';
  echo 'alert("Request Accepted")';
  echo '</script>';
  $stmt->execute();
  $stmt->close();
  $conn->close();
 }
}
else {
 echo "All field are required";
 die();
}

?>