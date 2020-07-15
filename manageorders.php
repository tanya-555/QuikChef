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
             background:url(imgs/hm2.jpg) no-repeat center center;
    background-attachment:fixed;
    background-size:cover;
            color:white;
        }
        
        #errp1{
            color:red;
            transform:translate(890px,100px);
        }
        .adds{
    transform:translate(490px,120px)
}
    </style>
    </head>
<body> 
    <?php $link=@mysqli_connect("localhost","root","","quikchef") or die("Erro:Unable to connect: " . mysqli_connect_error());
    if(isset($_POST["orderid"]))
    {
        $oid=$_POST["orderid"];
    }
  if(isset($_POST["submit"]))
  {
    $sql="Select * from orders where order_id='$oid' and status='pending'";
       if($result=mysqli_query($link,$sql)){
           if(mysqli_num_rows($result)==0){
               echo "<p id='errp1'>Invalid order id!!!</p>";
           }
      else
      {
          $sql1="Update orders set status='processing' where order_id='$oid'";
          if($result1=mysqli_query($link,$sql1)){
               echo "<p id='errp1'>Status updated to processing</p>";
          }
      }
      }
               
  }
    ?>
     <div class="adds" id="adds1">  
    <form method="post" name="myForm" action="manageorders.php" onsubmit="return validateForm()">
              <br />
         <div class="form-group">
             <input type="text" class="ut" name="orderid" placeholder="Enter order-id" size="30px" maxlength="100" class="form-control" ></div>
         <br />
                 <input type="submit" name="submit" class="btn btn-success btn-lg" id="button1" value="UPDATE STATUS" style="background-color:#ff0041;">
             </form>
        </div>
    <script>
     function validateForm() {
  var x = document.forms["myForm"]["orderid"].value;
         if(x=="")
             {
                 alert("Missing field!!!");
                 return false;
             }
     }
    </script>
</body>
</html>
<?php
ob_flush();
?>