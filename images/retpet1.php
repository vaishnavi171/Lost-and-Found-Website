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
<form method="post">
<center>
<input type="text" name="name" style="font-size: 25px" placeholder="Enter the kind of pet" /><br><br>
<input type="text" name="breed" style="font-size: 25px" placeholder="Enter the breed type" /><br><br>
<input type="text" name="uniqu" style="font-size: 25px" placeholder="Enter the unique identification" /><br><br>
<input type="text" name="color" style="font-size: 25px" placeholder="Enter the color of the pet"/><br><br>
<input type="submit" name="search" value="search by wallet type"/>
</center>
</form>
<table border="1" bgcolor="grey">
   <tr>
   	<th>IMAGE</th>
   	<th>PET TYPE</th>
    <th>BREED TYPE</th>
    <th>UNIQUE IDENTIFICATION</th>
    <th>COLOR</th>
    <th>PHONE NO</th>
    
    <th>FOUNDER NAME</th>
    <th>FOUND DATE</th>
    <th>FOUND TIME</th>
   </tr><br>
<?php
$connection=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($connection,'web1');
if(isset($_POST['search']))
{
   $name=$_POST['name'];
$breed=$_POST['breed'];
$uniqu=$_POST['uniqu'];
$color=$_POST['color'];
$db=mysqli_connect("localhost","root","","web1");
$sql="SELECT * FROM pet INNER JOIN founder on pet.phoneno=founder.phoneno where name='$name' and breed='$breed' and uniqu = '$uniqu' and color='$color' and thing='pet'";
$result = mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){

			echo "<div id='img_div'>";
			echo "<td><img src='".$row['images']."'></td>";
			echo "<td><p>".$row['name']."</p></td>";
			echo "<td><p>".$row['breed']."</p></td>";
			echo "<td><p>".$row['uniqu']."</p></td>";
			echo "<td><p>".$row['color']."</p></td>";
			echo "<td><p>".$row['phoneno']."</p></td>";
			echo "<td><p>".$row['user']."</p></td>";
			echo "<td><p>".$row['dates']."</p></td>";
			echo "<td><p>".$row['times1']."</p></td>";
			echo "</div>";
		}
}
?>
</body>
</html>
