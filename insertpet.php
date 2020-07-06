<?php
$msg="";
if(isset($_POST['upload']))
{
$target="images/".basename($_FILES['image']['name']);
$db=mysqli_connect("localhost","root","","web1");
$image = $_FILES['image']['name'];
$text = $_POST['text'];
$breed=$_POST['breed'];
$unique=$_POST['unique'];
$color=$_POST['color'];
$phoneno = $_POST['phoneno'];
$sql = "INSERT into pets values ('$text','$breed','$unique','$color',$image','$phoneno')";
mysqli_query($db,$sql);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>IMAGE</title>
</head>
<body>
<form method="post" action="insertpet.php" enctype="multipart/form-data">
<div>PET TYPE:
<input type="text" name="text">
</div><br>
<div>BREED TYPE:
<input type="text" name="breed">
</div><br>
<div>PET UNIQUE IDENTIFICATION:
<input type="text" name="unique">
</div><br>
<div>PET COLOR:
<input type="text" name="color">
</div><br>
<div><br>
<input type="file" name="image">
</div>
<div>PHONENO:
	<input type="text" name="phoneno" placeholder="Enter your Phone No">
</div>
<div>
<input type="submit" name="upload" value="upload Image">
</div>
</form>
</body>
</html>
