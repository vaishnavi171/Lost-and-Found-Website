<?php

$name=$_POST['name'];
$thing=$_POST['thing'];
$pno=$_POST['pno'];
$pname=$_POST['pname'];
$place=$_POST['place'];
$phoneno=$_POST['phoneno'];
if(!empty($name)||!empty($thing)||!empty($pno)||!empty($pname)||!empty($place))
{
	
	$conn=new mysqli('localhost','root','','web1');

	if($conn->connect_error){
		die('Connecct Error'.$conn->connect_error);
	}
	else
	{
		
		$stmt = $conn->prepare("insert into foup(name,thing,pno,pname,place,phoneno)values(?,?,?,?,?,?)");
		$stmt->bind_param("ssssss",$name,$thing,$pno,$pname,$place,$phoneno);
		$stmt->execute();
		echo "inserted";
		$stmt->close();
		$conn->close();
	}
}
else
{
	echo "All fields are required";
	die();
}
?>