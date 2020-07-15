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
       
        #errp1{
            color:black;
            font-size: 20px;
            transform:translate(620px,100px);
        }
        #errp{
            color:black;
        }
    </style>
    </head>
<body> 
    <?php 
    $var= $_COOKIE["price"];
    echo "<h1 align='center' id='errp2'>Total cost ". $var."</h1>";
    if(isset($_POST["submit"]))
    {
        echo "<p id=errp1>Order Confirmed</p>";
        exit();
    }
    ?>
  
   <div class="main" id="main1">
    <form name="myForm" method="post" action="summary.php" >
        
        <div class="form-group">
            
            <input type="text" class="ut" name="addr" placeholder="Enter address" size="30px" maxlength="200" class="form-control" ></div>  <br /> 
       
      <br />
        <div class="form-group">
        <select class="ut" class="form-control">
            <option>Cash on delivery</option>
            <option>Paytm</option>
            <option>Debit Card</option>
        </select></div>
     <input type="submit" name="submit" class="btn btn-success btn-lg" id="button1" value="CONFIRM" style="background-color:#ff0041;">
        </form>
    </div>    
    
</body>
</html>
<?php
ob_flush();
?>