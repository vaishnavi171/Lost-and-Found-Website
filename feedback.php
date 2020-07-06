<html>
<head>
 <title>Search data</title>
 <style>
  body{
   background:url("image2.png");
   color:white;
  }
  table,th,td{
   border:2px solid black;
   width:1100px;
   background-color:grey;
  }
  .btn{
   width: 30%;
   height: 5%;
   font-size: 22px;
   padding: 0px;
  }
 </style>
</head>
<body>
 <center>
  <h1>LIST OF OWNERS WHO HAVE GOT BACK THE THINGS THROUGH THIS SITE</h1>
  <table>
   <tr>
    <th>OWNER NAME</th>
    <th>NAME OF THE THING</th>
    <th>FOUNDER NAME</th>
    <th>PLACE</th>
    <th>FEEDBACK FOR FOUNDER</th>
   </tr><br>
   <?php
   $connection=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($connection,'web1');
    $query = "SELECT * FROM loserupdate";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
     ?>
     
     <tr>
      <td> <?php echo $row['name'];?>
      </td>
      <td><?php echo $row['thing'];?>
      </td>
      <td><?php echo $row['fname'];?>
      </td>
      <td><?php echo $row['place'];?>
      </td>
      <td><?php echo $row['feed'];?>
      </td>
     </tr>
     <?php
    }
   ?>
  </table>
  </div>
  </center>
</body>
</html>