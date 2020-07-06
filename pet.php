<?php
	if(isset($_POST['upload']))
	{
		$target = ""
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>IMAGE</title>
	</head>
	<body>
		<form method="post" action="pet.php" enctype="multipart/form-data">
			<div>
				<input type="text" name="id">
			</div>
			<div>
				<input type="file" name="image">
			</div>
			<div>
				<input type="submit" name="upload" value="upload Image">
			</div>
		</form>
	</body>
</html>