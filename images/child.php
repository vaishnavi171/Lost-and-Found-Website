<?php
$msg="";
if(isset($_POST['upload']))
{
$target="images/".basename($_FILES['image']['name']);
$db=mysqli_connect("localhost","root","","web1");
$name = $_POST['name'];
$age = $_POST['age'];
$uniqu = $_POST['uniqu'];
$image = $_FILES['image']['name'];
$phoneno = $_POST['phoneno'];
$sql = "INSERT into chile values ('$name','$age','$uniqu','$image','$phoneno')";
mysqli_query($db,$sql);
/*if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
$msg="IMAGE UPLOADED";
}
else
{
$msg="image not uploaded";
}*/
}
?>
<!DOCTYPE html>
<html>
<head>
<title>IMAGE</title>
<style>
body {
      background: url("image (2).png");
       
        margin: 0;
        padding: 0;
        background-size: cover;
      }
      .eg{
        width: 85%;
        max-width: 600px;
        background: #f1f1f1;
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 30px 40px;
        box-sizing:border-box;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 0 20px #000000b3;
      }
      .eg h1{
        margin-top: 0;
        font-weight: 200;
      }
      .txt{
        border:1px solid grey;
        margin: 8px 0;
        padding: 12px 18px;
        border-radius:8px;
      }
      .txt label{
        display: block;
        text-align: left;
        color: #333;
        text-transform: uppercase;
        font-size: 14px;
      }
      .txt input{
        width: 100%;
        border:none;
        background: none;
        outline: none;
        font-size: 18px;
        margin-top: 6px;
      }
      .btn{
        display: block;
        background: #9b59b6;
        padding: 14px 0;
        color: white;
        text-transform: uppercase;
        cursor: pointer;
        margin-top: 8px;
        width: 100%;
      }
    input:focus
    {
      outline-width:1px;
      outline-style: double;
      outline-color:red;
    }
    
  </style>
</head>
<body>
<form method="post" action="child.php" enctype="multipart/form-data">
<div class="eg">
	<div class="txt"><h1>ENTER THE DETAILS</h1></div>
<div class="txt">
<label>CHILD NAME:</label>
<input type="text" name="name" >
</div>
<div class="txt">
<label>CHILD AGE:</label>
<input type="text" name="age">
</div>
<div class="txt">
<label>UNIQUE IDENTIFICATION:</label>
<input type="text" name="uniqu" >
</div>
<div class="txt">
<label>CHILD IMAGE:</label>
<input type="file" name="image">
</div>
<div class="txt">
<label>YOUR PHONE NO:</label>
<input type="text" name="phoneno" >
</div>
<div class="btn">
<input type="submit" name="upload" value="upload Image" >
</div>
</div>
</form>
</body>
</html>
