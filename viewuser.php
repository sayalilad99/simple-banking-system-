<?php
session_start();
$con=mysqli_connect('localhost','root','','banking');
$name1=$_SESSION['name'];
$q="select name from user1 where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>
   Transfer To
    </title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div>
        <h3>Select name for credit transfer</h3>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h4>Name</h4></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="  Credit  "></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
    <footer class="page5">
      <hr>
      <code>Project By &copy Sayali.S.Lad</code>
    </footer>

</html>