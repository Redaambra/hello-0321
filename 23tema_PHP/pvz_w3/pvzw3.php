<?php
$con=mysqli_connect("localhost","Auto","LabaiSlaptas123","Auto");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM radars";
$result=mysqli_query($con,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);
printf ("%s (%s)\n",$row["date"],$row["numeris"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?> 