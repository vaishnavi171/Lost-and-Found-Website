<?php
$DocumentType = $_POST['DocumentType'];
$DocumentNumber = $_POST['DocumentNumber'];
$DocumentKeptin = $_POST['DocumentKeptin'];
$Colormaterial = $_POST['Colormaterial'];
$phoneno=$_POST['phoneno'];
if (!empty($DocumentType)  || !empty($DocumentNumber) ||  !empty($DocumentKeptin) || !empty($Colormaterial) || !empty($phoneno))
{
 
 $conn = new mysqli('localhost','root','','web1');
 if ($conn->connect_error) {
  die('Connect Error'.$conn->connect_error);
 }else{
  
  $stmt = $conn->prepare("insert into document values(?,?,?,?,?)");
  $stmt->bind_param("sssss",$DocumentType,$DocumentNumber,$DocumentKeptin,$Colormaterial,$phoneno);
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
