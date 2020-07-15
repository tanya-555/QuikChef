<?php
$a=array(array(5,8,1),array(5,0,1),array(8,9,2));
$b=array(array(3,9,2),array(1,4,9),array(2,3,4));
$c=array(array(0,0,0,),array(0,0,0),array(0,0,0));
echo "Matrix A before transpose operation:<br/>";
display($a);
echo "Matrix A after transpose operation:<br/>";
for($i=0;$i<3;$i++)
{
for($j=0;$j<3;$j++)
{
$c[$i][$j]=$a[$j][$i];
}
}
display($c);
echo "Sum of matrix A and B:<br/>";
for($i=0;$i<3;$i++)
{
for($j=0;$j<3;$j++)
{
$c[$i][$j]=$a[$i][$j]+$b[$i][$j];
}
}
display($c);
echo "Product of matrix A and B is:"."<br/>";
for($i=0;$i<3;$i++)
{
for($j=0;$j<3;$j++)
{
$c[$i][$j]=0;
for($k=0;$k<3;$k++)
{
$c[$i][$j]+=$a[$i][$k]*$b[$k][$j];
}
}
}
display($c);
function display($m)
{
for($i=0;$i<3;$i++)
{
for($j=0;$j<3;$j++)
{
echo $m[$i][$j]." ";
}
echo "<br/>";
}
echo "<br/>";
}
?>