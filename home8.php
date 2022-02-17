<!DOCTYPE html>
<html>
<head>
	<title>First PHP homework</title>
</head>
<body>
<?php 
echo "<table border =\"1\" style='border-collapse: collapse'>";
 for ($i=1; $i <7 ; $i++) { 
 	echo "<tr> \n";
 for ($x=1; $x <6 ; $x++) { 
 	$n=$x*$i;
 	echo "<td> $i *$x =$n <td> \n";
    
 }
 echo "</tr>";
 }
 echo "</table>";
?>
</body>
</html>