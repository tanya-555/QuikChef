<?php
header('Content-Type:text/plain');
$states="Mississipi Alabama Texas Massachusets Mas Kansas";
$statelist=['','','',''];
$i=0;
$states1=explode(' ',$states);
foreach($states1 as $s)
{
if(preg_match('/xas$/',$s))
{
$statelist[$i]=$statelist[$i].$s;
}
}
$i=$i+1;
foreach($states1 as $s)
{
if(preg_match('/^K.*s$/i',$s))
{
$statelist[$i]=$statelist[$i].$s;
}
}
$i=$i+1;
foreach($states1 as $s)
{
if(preg_match('/^M.*s$/',$s))
{
$statelist[$i]=$statelist[$i].$s;
}
}
$i=$i+1;
foreach($states1 as $s)
{
if(preg_match('/s$/',$s))
{
$statelist[$i]=$statelist[$i].$s;
}
}
foreach($statelist as $k=>$v)
{
echo "element[".$k."]= ".$v."\n";
}
?>