<?php
// session_start();
$link=mysqli_connect("localhost","root","","project");
// Check connection
//Display table
// $tn=$_SESSION['uname'];
$sql="TRUNCATE table kavitajay";
// FROM user WHERE emp_id in ('kavu','trishu','kavita') ";
mysqli_query($link,$sql);
?> 