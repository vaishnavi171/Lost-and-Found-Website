<html>
<head>
	<title>retpet</title>
	<style type="text/css">
		 body{
   background:url("image (2).png");
   color:white;
  }
	</style>
</head>
<body>
	<center>
	<form action="" method="post">
		<h1 style="color: yellow;">HAVE YOU LOST YOUR PET? THEN ENTER THE UNIQUE IDENTIFICATION TO FIND IT!!</h1><hr>
	<input type="text" name="id" placeholder="Enter the unique identification" style="font-size: 30px;width: 50%;border:none;border-bottom: groove;"/><br><br>
	<input type="submit" name="submit" value="search by wallet type" style="font-size: 30px;width:50%;" />
</center>
</form>
<table border="1" bgcolor="lightgrey">
   <tr>
   	<th>PET KIND</th>
    <th>PET COLOR</th>	
    <th>UNIQUE IDENTIFICATION</th>
    <th>PHONE NO</th>
    <th>FOUNDER NAME</th>
    <th>FOUND DATE</th>
    <th>FOUND TIME</th>
   </tr><br>
	<?php
	
	$connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'web1');
	if(isset($_POST['submit']))
   	{
   		
		$id=$_POST['id'];	
		//$db=mysqli_connect("localhost","root","","web1");
		//$sql="SELECT * FROM pet where id='3123'";
		$query = "SELECT * FROM pet INNER JOIN founder on pet.phoneno=founder.phoneno where id='$id'" ;
		$result = mysqli_query($connection,$query);
		while($row=mysqli_fetch_array($result)){
			echo "<div id='img_div'>";
			echo "<img src='".$row['image']."' >";
			echo "<p>".$row['id']."</p>";
			echo "</div>";
		}
	}
?>
</body>
</html>
