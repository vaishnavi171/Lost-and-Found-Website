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
  <h1>Enter the details of Lost things to search!!</h1>
 <div class="container">
  <form action="" method="POST">
   <input id="myInput" type="text" class="btn" name="egtype" placeholder="select type" style="height: 30px" size="27px" list="datalist1"/><br/><br/>

          <datalist id="datalist1">
            <option value= "Mobile"></option>
            <option value= "Laptop"></option>
            <option value= "Tablets"></option>
            <option value= "Power banks"></option>
            <option value= "sd cards"></option>
            <option value= "ear phones"></option>

          </datalist>


          <input id="eg" type="text" name="brand" placeholder="select brand" style="height: 30px" size="27px" list="datalist112" class="btn" />

          <datalist id="datalist112">
            <option value= "Redmi"></option>
            <option value= "Lenova"></option>
            <option value= "samsung"></option>
            <option value= "sony"></option>
            <option value= "LG"></option>
            <option value= "Panasonic"></option>
            <option value= "Apple"></option>
            <option value= "intel"></option>
            <option value= "oppo"></option>
            <option value= "oneplus"></option>
            <option value= "hcl"></option>
            <option value= "karbonn"></option>
            <option value= "voltas"></option>
            <option value= "micromax"></option>
            <option value= "acer"></option>
            <option value= "dell"></option>
            <option value= "xolo"></option>
            <option value= "sandisk"></option>
            <option value= "bose"></option>
            <option value= "skullcandy"></option>
            
          </datalist><br/><br/>
            
   <input id="myInput" type="text" name="Color" placeholder="Color" class="btn" style="height: 30px" size="27px" list="datalist10"/>

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
   <input type="submit" name="search" class="btn" value="search"/><br/><br/>
  </form>
  <table>
   <tr>
    <th>ELECTRONIC GADGET TYPE</th>
    <th>ELECTRONIC GADGET BRAND</th>
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
    $egtype = $_POST['egtype'];
    $brand = $_POST['brand'];
    $Color = $_POST['Color'];
    $query = "SELECT * FROM eg INNER JOIN founder on eg.phoneno=founder.phoneno where egtype='$egtype' and brand='$brand' or Color='$Color' and thing='electronic gadget' INNER JOIN foup on foup.thing='electronic gadget' and foup.phoneno=eg.phoneno";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
     ?>
     
     <tr>
      <td> <?php echo $row['egtype'];?>
      </td>
      <td><?php echo $row['brand'];?>
      </td>
      <td><?php echo $row['Color'];?>
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