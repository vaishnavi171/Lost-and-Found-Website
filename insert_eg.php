<?php

$egtype=$_POST['egtype'];
$brand=$_POST['brand'];
$Color=$_POST['Color'];
$phoneno=$_POST['phoneno'];

	$conn=new mysqli('localhost','root','','web1');

	if($conn->connect_error){
		die('Connect Error'.$conn->connect_error);
	}
	else
	{
		
		$stmt = $conn->prepare("insert into eg values(?,?,?,?)");
		$stmt->bind_param("ssss",$egtype,$brand,$Color,$phoneno);
		$stmt->execute();
		echo '<script type="text/javascript">';
  echo 'alert("Request Accepted")';
  echo '</script>';
		$stmt->close();
		$conn->close();
	}
?>