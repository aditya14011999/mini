<?php 
include "config.php";
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['rpassword'])) {

 ?>
 <h1 style="text-align: center;">Hello, <?php echo $_SESSION['fname'];?>   <?php echo $_SESSION['lname'] ; ?></h1>
 <?php
     $imm=$_SESSION['image'];
     $records1 = mysqli_query($conn,"select *from details where image='$imm'"); 
     while($data1 = mysqli_fetch_array($records1))
      {
     ?>
     <div class="container"><img class="imgc" style="float: right ; border-radius: 50%" src="uploads/<?php echo $data1['image']; ?>" width="130" height="130" ><br><br><br><br><br><br>
      <h1 style="text-align: right   ;"><?php echo $_SESSION['fname'];?>   <?php echo $_SESSION['lname'] ; ?></h1>
    </div>
<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
     
     
     <table border="2">
  <tr>
    <td>Name</td>
    <td>emailid</td>
    <td>contact no</td>
    <td>age</td>
    <td>image</td>
  </tr>
  <?php

// Using database connection file here

$records = mysqli_query($conn,"select * from details"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['fname']; ?><?php echo $data['lname']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['number']; ?></td>
    <td><?php echo $data['age']; ?></td>
    <td><img src="uploads/<?php echo $data['image']; ?>" style="height:100px;width:100px; border-radius: 50px" ></td>
  </tr>	
<?php
}
?>

</table>



     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>




