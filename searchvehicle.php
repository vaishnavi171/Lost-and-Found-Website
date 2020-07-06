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
   <input id="myInput" type="text" class="btn" name="vehicleno" placeholder="Select VehicleNo" style="height: 25px" size="30px"/><br/><br/>
   <select name="vehicle_type" style="font-size: 25px;width:400px"  class="btn">
              <option value="choose">
                Select the type of vehicle
              </option>
              <option value="cycle">
                Cycle
              </option>
              <option value="Two-Wheeler">
                Two-Wheeler
              </option>
              <option value="Three-Wheeler">
                Three-Wheeler
              </option>
              <option value="Four-Wheeler">
                Four-Wheeler
              </option>
            </select><br/><br/>
   <input id="myInput" type="text" name="vehicle_color" placeholder="Color" class="btn" style="height: 30px" size="27px" list="datalist10"/>

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

          <input id="myInput" type="text" name="vmodel" placeholder="Enter Model" class="btn" style="height: 30px" size="27px" list="datalist"/>
          <datalist id="datalist">
            <option value= "Maruthi"></option>
            <option value= "Yamaha"></option>
            <option value= "TVS 50"></option>
            <option value= "Scooty"></option>
            <option value= "Hero Honda"></option>
            <option value= "BMW"></option>
            <option value= "Hyundai"></option>
            <option value= "Tata"></option>
            <option value= "Mahindra"></option>
            <option value= "Toyota"></option>
            <option value= "Audi"></option>
            <option value= "Royal Enfield"></option>
            <option value= "Lady Bird"></option>
            <option value= "Jeep"></option>
            <option value= "Mitsubishi"></option> 
          </datalist><br/><br/>
   <input type="submit" name="search" class="btn" value="search by wallet type"/><br/><br/>
  </form>
  <table>
   <tr>
    <th>VEHICLE NO</th>
    <th>VEHICLE TYPE</th>
    <th>VEHICLE COLOR</th>
    <th>VEHICLE MODEL</th>
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
    $vehicleno = $_POST['vehicleno'];
    $vehicle_color = $_POST['vehicle_color'];
    $vehicle_type = $_POST['vehicle_type'];
    $vmodel = $_POST['vmodel'];
    
    $query = "SELECT * FROM vehicle INNER JOIN founder on vehicle.phoneno=founder.phoneno where vehicleno='$vehicleno'and vehicle_color='$vehicle_color' and vehicle_type='$vehicle_type' and thing='vehicle'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
     ?>
     <tr>
      <td> <?php echo $row['vehicleno'];?>
      </td>
      <td><?php echo $row['vehicle_color'];?>
      </td>
      <td><?php echo $row['vehicle_type'];?>
      </td>
      <td><?php echo $row['vmodel'];?>
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