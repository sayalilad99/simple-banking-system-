<?php
session_start();
$con=mysqli_connect('localhost','root','','banking');
$q="select name from user1";
$result=mysqli_query($con,$q);
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   Transfer Amount
    </title>
    <link rel="stylesheet" href="style.css">
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
       
    </style>
    </head>
    <body>
     <form action="checkcredit.php" method="post"  style="position: center; ">
          <div>
              <h3>Transfer Amount</h3>
          <br>
            <br>
          <input type="text" name="transfer" style="position:relative; left:45%"><br>
          <br>
        
          <input type="Submit" style="position:relative;left:47%">
        
        </div>
        </form>

        
    </body>
    <footer class="page6">
      <hr>
      <code>Project By &copy Sayali.S.Lad</code>
    </footer>
</html>