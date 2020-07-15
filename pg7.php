<!DOCTYPE html>
<head>
<style>
body
{
background-color:red;
}
</style>
<script type="text/javascript">
function startTime()
{
var d= new Date();
var h=d.getHours();
var m=d.getMinutes();
var s=d.getSeconds();
document.getElementById("txt").innerHTML=h+":"+m+":"+s;
setTimeOut('startTime()',1000);
}
</script>
</head>
<body background-color="red" text="black" onload="startTime()">
<?php
date_default_timezone_set('Asia/Kolkata');
$today=date("H:i:s");
?>
<h1 align="center">Local System Time is: <span id="txt"></span></h1>
<br />
<h1> <?php echo "Time is: ".$today; ?></h1>
</body>
</html>
<?php
date_default_timezone_set('Asia/Kolkata');
$today=date("H:i:s");
?>
