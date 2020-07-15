<?php
$file="f1.txt";
$count=strval(file_get_contents($file));
$count=$count+1;
file_put_contents($file,$count);
echo "You are visitor no. ".$count;
?>