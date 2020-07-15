<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <title>ONLINE FOOD ORDER AND DELIVERY</title>
    <link href="styling.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
     <script src="js/jquery-3.3.1.min.js"></script>
<style>
body{
   background:url(imgs/plain.jpg) no-repeat center center ;
    background-attachment:fixed;
    background-size:cover;
}
    #sep{
        font-family:Arvo,serif;
    }
    a{
        color:black;
        font-size:30px;
        font-family:cursive;
    }
.navb{
color:white;
font-family:cursive;
}
#home{
    background-color: transparent;
    color: black;
    text-align: center;
    padding-top: 6%;
    font-family:cursive;
}
#home h1{
    margin-bottom: 30px;
    font-family:cursive;
    color:black;
}
#myCarousel{
    width: 40%;
    margin: -160px auto;
}
.carousel-inner .item img{
    height: 300px; 
    margin: 0 auto;
    width:800px;
}

.carousel-caption{
    position: relative;
    left: auto;
    right: auto;
    height: 200px;
    color:black;
}


@media (max-width:768px){
    .carousel-inner .item img{
        height: 300px;   
    }
    .carousel-inner h2{
        font-size: 23px;   
    }
}
@media (max-width:400px){
    .carousel-inner .item img{
        height: 200px;   
    }
    .carousel-inner h2{
        font-size: 17px;   
    }
    .navbar-brand{
        font-size: 12px;   
    }
}
.navbar-custom {
  font-size: 18px;
  background-color: black;
  border-color: black;

  
}
    .navbar-custom .navbar-nav > li > a {
  color: #c0c0c0;
  border-left: 1px solid black;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}
#promise{
    padding-top:0px;   
}    
</style>
    </head>
<body>
     <?php
    $val=0;
    setcookie("total",$val,time()+9600);
    ?>
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top" id="mynavBar">
        
          <div class="container-fluid">
              <div >
                  <ul class="nav navbar-nav navbar-right navb">
                      <li class="active"><a href="viewprofile.php">View Profile</a></li>
                      <li><a href="orderhistory.php">Order History</a></li>
                      <li><a href="resetcust.php">Reset Password</a></li>
                      <li><a href="index.php">Logout</a></li>
                  </ul>
              </div>
          </div>
      </nav>

 <div class="jumbotron" id="home">
          <div class="container">
              <h1>ORDER NOW!</h1>
          </div>
      </div>
      <div id="promise" class="container-fluid">
          <div class="carousel slide" id="myCarousel" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active">
                  </li>
                  <li data-target="#myCarousel" data-slide-to="1">
                  </li>
                  <li data-target="#myCarousel" data-slide-to="2">
                  </li>
                  
              </ol>
              <div class="carousel-inner">
                  
                  <div class="item active">
                      <img src="imgs/cakes.jpg"><br />
                      <div class="carousel-caption">
                          <a id="h" href="ff.php">Frozen Frost</a>
                      </div>
                  </div>
                  <div class="item">
                      <img src="imgs/noodles.jpg"><br />
                      <div class="carousel-caption">
                          <a id="h" href="cg.php">China Garden</a>
                      </div>
                  </div>
                  <div class="item">
                      <img src="imgs/pizza.jpg"><br />
                      <div class="carousel-caption">
                          <a id="h" href="wp.php">Woodfire Pizza</a>
                      </div>
                  </div>
                  <div class="item">
                      <img src="imgs/north.jpg"><br />
                      <div class="carousel-caption">
                           <a id="h" href="sc.php">Spice Cafe</a>
                      </div>
                  </div>
              </div>
                  </div>
             
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
              
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Previous</span>
              
              </a>
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
      <script>
          $(function(){
                $('.carousel').carousel({
                    interval: 10000
                }); 
          });
      </script>
  </body>
</html>