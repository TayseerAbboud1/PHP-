<?php
$q=$_GET["q"];//get the q parameter from URL
//echo $q;
$con=mysqli_connect("localhost","root","","project");
$sql =  "SELECT * FROM students WHERE `ID` LIKE'%$q'   " ;
//require "connection.php"
$r = mysqli_query($con, $sql);
echo "<table border=3>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Major</th>";
 while($row = mysqli_fetch_array($r) ) {
      echo "<TR><td>".$row['ID']."</td>";
	  echo "<td>".$row['First name']."</td>";
	  echo "<td>".$row['Last Name']."</td>";
	  echo "<td>".$row['Major']."</td> </TR>";
	  //echo $q;
 }  	
echo"<TABLE>";
 mysqli_close($con);
 echo "<p><a href = menu.php >Back to menu";
?>