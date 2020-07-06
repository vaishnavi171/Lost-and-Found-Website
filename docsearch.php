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
   <input id="myInput" type="text" class="btn" name="DocumentType" placeholder="select type" style="height: 30px" size="27px" list="datalist1"/>

          <datalist id="datalist1">
            <option value= "Birth Certificates"></option>
            <option value= "House Certificates"></option>
            <option value= "Graduation Certificates"></option>
            <option value= "Vehicle Documents"></option>
            <option value= "Bank Documents"></option>
            <option value= "PassBook"></option>
            <option value= "Card"></option>

          </datalist> <br/><br/>
   <input id="myInput" type="text" class="btn" name="DocumentNumber" placeholder="select Document No" style="height: 30px" size="27px" /><br/><br/>

   <input id="myInput" type="text" name="DocumentKeptin" placeholder="name of the file" class="btn" style="height: 30px" size="27px" list="datalist10"/>

          <datalist id="datalist10">
            <option value= "Stick File"></option>
            <option value= "Cover"></option>
            <option value= "Folder"></option>
            <option value= "Purse"></option>
            <option value= "Bag"></option>
          </datalist><br/><br/>

          <input id="myInput" type="text" name="Colormaterial"placeholder="Color" class="btn" style="height: 30px" size="27px" list="datalist11"/>

          <datalist id="datalist11">
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
    <th>DOCUMENT TYPE</th>
    <th>DOCUMENT NUMBER</th>
    <th>DOCUMENT KEPT INSIDE?</th>
    <th>COLOR OF THE MATERIAL</th>
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
    $DocumentType = $_POST['DocumentType'];
    $DocumentNumber = $_POST['DocumentNumber'];
    $DocumentKeptin = $_POST['DocumentKeptin'];
    $Colormaterial = $_POST['Colormaterial'];
    $query = "SELECT * FROM document INNER JOIN founder on document.phoneno=founder.phoneno where DocumentNumber='$DocumentNumber'and DocumentKeptin='$DocumentKeptin' and Colormaterial='$Colormaterial' and thing='document' INNER JOIN foup on foup.thing='document' and foup.phoneno=document.phoneno";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
     ?>
     
     <tr>
      <td> <?php echo $row['DocumentType'];?>
      </td>
      <td><?php echo $row['DocumentNumber'];?>
      </td>
      <td><?php echo $row['DocumentKeptin'];?>
      </td>
      <td><?php echo $row['Colormaterial'];?>
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