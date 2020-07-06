<?php
$msg="";

	if(isset($_POST['upload']))
	{
		$name = $_POST['name'];
$breed = $_POST['breed'];
$uniqu = $_POST['uniqu'];
$color = $_POST['color'];
$images = $_FILES['images']['name'];
$phoneno=$_POST['phoneno'];
		$target="images/".basename($_FILES['images']['name']);
		$conn = new mysqli('localhost','root','','web1');
		if ($conn->connect_error) {
		  die('Connect Error'.$conn->connect_error);
		 }
 		else{
  
		  $stmt = $conn->prepare("insert into pet values(?,?,?,?,?,?)");
		  $stmt->bind_param("ssssss",$name,$breed,$uniqu,$color,$phoneno,$images);
		  $stmt->execute();
		  echo '<script type="text/javascript">';
		  echo 'alert("Request Accepted")';
		  echo '</script>';
		  $stmt->close();
		  $conn->close();
		 }
		
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
		<div class="eg">
		<form method="post" action="pet.php" enctype="multipart/form-data">
			<div class="txt">
				<input type="text" name="name"  placeholder="Enter kind of pet">
			</div>
			<div class="txt">
				<input type="text" name="breed" placeholder="Enter the breed type">
			</div>
			<div class="txt">
				<input type="text" name="uniqu" placeholder="unique identification">
			</div>
			<div class="txt">
				<input type="text" name="color" placeholder="Enter the color">
			</div>
			<!--<div>
				<input type="file" name="images">
			</div>-->
			<div class="txt">
				<input type="text" name="phoneno" placeholder="Enter your Phone No">
			</div>
			<div class="txt">
				<input type="file" name="images">
			</div>
			<div class="btn">
				<input type="submit" name="upload" value="upload Image">
			</div>
		</form>
	</div>
	</center>
	</body>
</html>