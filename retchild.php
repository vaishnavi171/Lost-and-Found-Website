<html>
<head>
<title>retchild</title>
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
<p style="font-size: 25px">CHILD NAME:
<input type="text" name="name" style="font-size: 25px" /><br><br>
CHILD AGE:
<input type="text" name="age" style="font-size: 25px" /><br><br>
UNIQUE IDENTIFICATION:
<input type="text" name="uniqu" style="font-size: 25px" /><br><br>
<input type="submit" name="search" value="search by info" style="font-size: 25px" /></p>
</center>
</form>

<table border="1" bgcolor="lightgrey">
   <tr>
   	<th>CHILD IMAGE</th>
    <th>CHILD NAME</th>
    <th>AGE</th>
    <th>UNIQUE IDENTIFICATION</th>
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
$age=$_POST['age'];
$uniqu=$_POST['uniqu'];
$db=mysqli_connect("localhost","root","","web1");
$sql="SELECT * FROM chile INNER JOIN founder on chile.phoneno=founder.phoneno where name='$name' and age='$age' and uniqu = '$uniqu'";
$result = mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){

			echo "<div id='img_div'>";
			echo "<td><img src='".$row['image']."'></td>";
			echo "<td><p>".$row['name']."</p></td>";
			echo "<td><p>".$row['age']."</p></td>";
			echo "<td><p>".$row['uniqu']."</p></td>";
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
