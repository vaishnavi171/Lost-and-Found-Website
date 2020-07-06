<?php

$name=$_POST['name'];
$thing=$_POST['thing'];
$fname=$_POST['fname'];
$place=$_POST['place'];
$feed=$_POST['feed'];

	$conn=new mysqli('localhost','root','','web1');

	if($conn->connect_error){
		die('Connect Error'.$conn->connect_error);
	}
	else
	{	
		$stmt = $conn->prepare("insert into loserupdate values(?,?,?,?,?)");
		$stmt->bind_param("sssss",$name,$thing,$fname,$place,$feed);
		$stmt->execute();
		echo '<script type="text/javascript">';
  echo 'alert("Request Accepted")';
  echo '</script>';
		$stmt->close();
		$conn->close();
	}
?>