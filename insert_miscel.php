<?php
$MiscellaneousType = $_POST['MiscellaneousType'];
$miscellaneousunique = $_POST['miscellaneousunique'];
$Colormiscellaneous = $_POST['Colormiscellaneous'];
$phoneno=$_POST['phoneno'];
if (!empty($MiscellaneousType)  || !empty($miscellaneousunique) ||  !empty($Colormiscellaneous) ||!empty($phoneno))
{
 
 $conn = new mysqli('localhost','root','','web1');
 if ($conn->connect_error) {
  die('Connect Error'.$conn->connect_error);
 }else{
  
  $stmt = $conn->prepare("insert into miscellaneous values(?,?,?,?)");
  $stmt->bind_param("ssss",$MiscellaneousType,$miscellaneousunique,$Colormiscellaneous,$phoneno);
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
