<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking');
$name=$_POST['name'];
$q="select * from user1 where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
?>
<html>
<head>
   <title>Selected User</title>
    <link rel="stylesheet" href="style.css">

</head>
    <body>
    <div>
        <h3>Details</h3>
       <table class="flat-table flat-table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>
    <a href="viewuser.php" class="viewuser1">Transfer To</a>
    <a href="selectuser.php" class="select">Back</a>
        
    </body>
    <footer class="page4">
      <hr>
      <code>Project By &copy Sayali.S.Lad</code>
    </footer>
</html>