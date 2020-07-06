<?php
$WalletType = $_POST['WalletType'];
$WalletBrand = $_POST['WalletBrand'];
$walletunique = $_POST['walletunique'];
$WalletColor = $_POST['WalletColor'];
$phoneno=$_POST['phoneno'];
if (!empty($WalletType)  || !empty($WalletBrand) ||  !empty($walletunique) || !empty($WalletColor) || !empty($phoneno) )
{
 
 $conn = new mysqli('localhost','root','','web1');
 if ($conn->connect_error) {
  die('Connect Error'.$conn->connect_error);
 }else{
  
  $stmt = $conn->prepare("insert into fwallet values(?,?,?,?,?)");
  $stmt->bind_param("sssss",$WalletType,$WalletBrand,$walletunique,$WalletColor,$phoneno);
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
