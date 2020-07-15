<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ONLINE FOOD ORDER AND DELIVERY</title>
    <link href="styling.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <style>
        body{
             background:url(imgs/plain.jpg) no-repeat center center;
    background-attachment:fixed;
    background-size:cover;
            color:black;
        }
        #p5{
            color:white;
        }
        #leg{
            color:white;
            font-size:30px;
        }
        fieldset{
            width:330px;
        }
        #errp1{
            color:red;
            transform:translate(890px,100px);
        }
    </style>
    </head>
<body> 
    <?php $link=@mysqli_connect("localhost","root","","quikchef") or die("Erro:Unable to connect: " . mysqli_connect_error());
    $val=$_COOKIE["ename"];
    $sql1="select user_id from users where name='$val'";
    if($result1=mysqli_query($link,$sql1)){
           if(mysqli_num_rows($result1)>0){
      while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){     
          $uid=$row1["user_id"];
      }
           }
    }
   $sql="select order_id,rest_id,status from orders where user_id='$uid'";
         if($result=mysqli_query($link,$sql)){
           if(mysqli_num_rows($result)>0){
                echo "<table class='tabl table table-stripped table-hover table-condensed table-bordered'>
               <tr>
               <th>ORDER ID</th>
               <th>REST NAME</th>
               <th>STATUS</th>
               </tr>
               ";
               while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                   $v=$row["rest_id"];
               $sql2="select name from restaurants where rest_id='$v'";
               if($result2=mysqli_query($link,$sql2)){
           if(mysqli_num_rows($result2)>0){
               
               while($row2=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>".$row["order_id"]."</td>";
                   echo "<td>".$row2["name"]."</td>";
                   echo "<td>".$row["status"]."</td>";
                   echo "</tr>";
               }
        
           }
               }
           }
               echo "</table>";
           }
         
         }
    ?>
    
</body>
</html>
<?php
ob_flush();
?>