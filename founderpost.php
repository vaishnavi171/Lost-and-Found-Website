<?php
$user=$_POST['user'];
$thing = $_POST['thing'];
$dates = $_POST['dates'];
$times1 = $_POST['times1'];
$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$place = $_POST['place'];
$phoneno = $_POST['phoneno'];

$conn=new mysqli('localhost','root','','web1');

	if($conn->connect_error){
		die('Connect Error'.$conn->connect_error);
	}
	else
	{
		
		$stmt = $conn->prepare("insert into founder(user,thing,dates,times1,country,state,district,place,phoneno)values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssssss",$user,$thing,$dates,$times1,$country,$state,$district,$place,$phoneno);
		$stmt->execute();
		header('Location:http://localhost/example/chooselostitems.html#');
		$stmt->close();
		$conn->close();
	}
?>