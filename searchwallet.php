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
   <input id="myInput" type="text" class="btn" name="WalletType" placeholder="select type" style="height: 30px" size="27px" list="datalist1"/>

          <datalist id="datalist1">
            <option value= "Large Wallet"></option>
            <option value= "Cardcase Wallet"></option>
            <option value= "Key Wallet"></option>
            <option value= "Trifold Wallet"></option>  
          </datalist> <br/><br/>
   <input id="brand" type="text" name="WalletBrand" class="btn" placeholder="select brand" style="height: 30px" size="27px" list="datalist12"/>

          <datalist id="datalist12">
            <option value= "Hornbull"></option>
            <option value= "Woodland"></option>
            <option value= "Titan"></option>
            <option value= "Levi's"></option>
            <option value= "K London"></option>
            <option value= "American Tourister"></option>
          </datalist><br/><br/>
   <input id="myInput" type="text" name="WalletColor" placeholder="Color" class="btn" style="height: 30px" size="27px" list="datalist10"/>

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
    <th>WALLET BRAND</th>
    <th>WALLET UNIQUE</th>
    <th>WALLET COLOR</th>
    <th>PHONE NO</th>
    <th>FOUNDER NAME</th>
    <th>FOUND DATE</th>
    <th>FOUND TIME</th>
    <th>POLICE STATION NAME</th>
    
   </tr><br>
   <?php
   $connection=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($connection,'web1');
   if(isset($_POST['search']))
   {
    $WalletType = $_POST['WalletType'];
    $WalletBrand = $_POST['WalletBrand'];
    $WalletColor = $_POST['WalletColor'];
    $query = "SELECT * FROM fwallet INNER JOIN founder on fwallet.phoneno=founder.phoneno and WalletType='$WalletType' and WalletBrand='$WalletBrand' and WalletColor='$WalletColor' and thing='wallet' INNER JOIN foup on foup.thing='wallet' and foup.phoneno=fwallet.phoneno";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
     ?>
     
     <tr>
      <td> <?php echo $row['WalletBrand'];?>
      </td>
      <td><?php echo $row['walletunique'];?>
      </td>
      <td><?php echo $row['WalletColor'];?>
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
      <td>
        <?php echo $row['pname'];?>
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