<?php
$TravelBagType = $_POST['TravelBagType'];
$BagBrand = $_POST['BagBrand'];
$travelunique = $_POST['travelunique'];
$Color = $_POST['Color'];
$phoneno = $_POST['phoneno'];
if (!empty($TravelBagType)  || !empty($BagBrand) ||  !empty($travelunique) || !empty($Color) || !empty($phoneno) )
{
 
 $conn = new mysqli('localhost','root','','web1');
 if ($conn->connect_error) {
  die('Connect Error'.$conn->connect_error);
 }else{
  
  $stmt = $conn->prepare("insert into travel values(?,?,?,?,?)");
  $stmt->bind_param("sssss",$TravelBagType,$BagBrand,$travelunique,$Color,$phoneno);
  $stmt->execute();
  echo '<script type="text/javascript">';
  echo 'alert("Request Accepted")';
  echo '</script>';
  $stmt->close();
  $conn->close();
 }
}
else {
 echo "All field are required";
 die();
}

?>
