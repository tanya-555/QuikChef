<!DOCTYPE html>
<head>
<style>
table,td,th
{
border:1px solid black;
width:30%;
text-align:center;
border-collapse:collapse;
background-color:green;
}
table{margin:auto;}
</style>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$dbname="wlab";
$a=[];
$conn=mysqli_connect($servername,$username,'',$dbname);
if($conn->connect_error)
die("connection failed");
$sql="select * from student";
$result=$conn->query($sql);
echo "<br>";
echo "<center> before sorting </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>usn</th><th>name</th><th>address</th></tr>";
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row["usn"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["addr"]."</td></tr>";
array_push($a,$row["usn"]);
}
$n=count($a);
for($i=0;$i<($n-1);$i++)
{
$pos=$i;
for($j=$i+1;$j<$n;$j++)
{
if($a[$pos]>$a[$j])
$pos=$j;
}
if($pos!=$i)
{
$temp=$a[$i];
$a[$i]=$a[$pos];
$a[$pos]=$temp;
}
}
$c=[];$d=[];
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
for($i=0;$i<$n;$i++)
{
if($row["usn"]==$a[$i])
{
$c[$i]=$row["name"];
$d[$i]=$row["addr"];
}
}
}
echo "</table>";
echo "<br>";
echo "<center> after sorting </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>usn</th><th>name</th><th>address</th></tr>";
for($i=0;$i<$n;$i++)
{
echo "<tr>";
echo "<td>".$a[$i]."</td>";
echo "<td>".$c[$i]."</td>";
echo "<td>".$d[$i]."</td></tr>";
}
echo "</table>";
}
else
{
echo "table is empty";
}
$conn->close();
?>
</body>
</html>
