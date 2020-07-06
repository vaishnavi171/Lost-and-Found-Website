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
   background-color: grey;
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
  <h1>Enter the details of Lost things to search!!</h1>
 <div class="container">
  <form action="" method="POST">
   <input id="myInput" type="text" class="btn" name="MiscellaneousType" placeholder="select type" style="height: 30px" size="27px" list="datalist1"/>

          <datalist id="datalist1">
            <option value= "Key"></option>
            <option value= "Jewels"></option>
            <option value= "Watch"></option>
            <option value= "Charger"></option>
            <option value= "Helmet"></option>
            <option value= "Umbrella"></option>
            <option value= "Spectacles"></option>  
          </datalist> <br/><br/>
   <input id="brand" type="text" name="miscellaneousunique" class="btn" placeholder="Enter unique identification" style="height: 30px" size="27px" /><br/><br/>
   <input id="myInput" type="text" name="Colormiscellaneous" placeholder="Color" class="btn" style="height: 30px" size="27px" list="datalist10"/>

          <datalist id="datalist10">
            <option value= "red"></option>
            <option value= "rose"></option>
            <option value= "black"></option>
            <option value= "brown"></option>
            <option value= "white"></option>
            <option value= "purple"></option>
            <option value= "pink"></option>
            <option value= "violet"></option>
            <option value= "green"></option>
            <option value= "blue"></option>
            <option value= "cyan"></option>
            <option value= "gold"></option>
            <option value= "yellow"></option>
            <option value= "grey"></option>
              
          </datalist><br/><br/>
   <input type="submit" name="search" class="btn" value="search by wallet type"/><br/><br/>
  </form>
  <table>
   <tr>
    <th>MISCELLANEOUS TYPE</th>
    <th>UNIQUE IDENTIFICATION</th>
    <th>COLOR</th>
    <th>PHONE NUMBER OF THE FOUNDER</th>
    <th>FOUNDER NAME</th>
    <th>DATE FOUND</th>
    <th>TIME FOUND</th>
   </tr><br>
   <?php
   $connection=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($connection,'web1');
   if(isset($_POST['search']))
   {
    $MiscellaneousType = $_POST['MiscellaneousType'];
    $miscellaneousunique = $_POST['miscellaneousunique'];
    $Colormiscellaneous = $_POST['Colormiscellaneous'];
    $query = "SELECT * FROM miscellaneous INNER JOIN founder on miscellaneous.phoneno=founder.phoneno where MiscellaneousType='$MiscellaneousType' and miscellaneousunique='$miscellaneousunique' and Colormiscellaneous='$Colormiscellaneous' and thing='miscellaneous'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
     ?>
     
     <tr>
      <td> <?php echo $row['MiscellaneousType'];?>
      </td>
      <td><?php echo $row['miscellaneousunique'];?>
      </td>
      <td><?php echo $row['Colormiscellaneous'];?>
      </td>
      <td><?php echo $row['phoneno'];?>
      </td>
      <td><?php echo $row['user'];?>
      </td>
      </td>
      <td><?php echo $row['dates'];?>
      </td>
      </td>
      <td><?php echo $row['times1'];?>
      </td>
     </tr>
     <?php
    }
   }
   ?>
  </table>
  </div>
  </center>
</body>
</html>