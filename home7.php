<!DOCTYPE html>
<html>
<head>
	<title>First PHP homework</title>
</head>
<body>
<?php 
 $num=4;
 $fact=1;

 if ($num==1) {
 	echo "1";
 }
 else{
    for ($i=1; $i <=$num ; $i++) { 
 	$fact=$fact*$i;
 }}

 echo $fact;
?>
</body>
</html>