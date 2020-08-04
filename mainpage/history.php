<?php
session_start();
$link=mysqli_connect("localhost","root","","project");
// Check connection
//Display table
$tn=$_SESSION['uname'];
$sql = "SELECT DISTINCT bname,taname,tbgenre,tbookid FROM ".$tn;
if($res=mysqli_query($link, $sql))
?>
<form name="form" method="POST">
<?php
if(mysqli_num_rows($res)>0)
{
    echo "<table>";
    echo"<col width='40%'>
    <col width='40%'>
    <col width='10%'>
    <col width='10%'>";
    echo "<tr>"; 
    echo "<th>Book Name</th>"; 
    echo "<th>Author Name</th>"; 
    echo "<th>Genre</th>";
    echo "<th>Book ID</th>";
    echo "</tr>"; 
    while ($row = mysqli_fetch_array($res)) 
    { 
        echo "<tr>"; 
        echo "<td>".$row['bname']."</td>"; 
        echo "<td>".$row['taname']."</td>"; 
        echo "<td>".$row['tbgenre']."</td>"; 
        echo "<td>".$row['tbookid']."</td>"; 
    }
    echo "</table>";
}
else { 
echo "History is empty,  please view some books"; 
} 
 ?>
 <html>
     <head>
         <style>
             h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: 500;
  font-size: 20px;
  color: black;
  text-transform: uppercase;
  background-color:yellow;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 16px;
  color: black;
  background-color:lightsalmon;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
.sel{
  font-size:12px;
}

section{
  margin: 50px;
}

         </style>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <a href="/turnapage/mainpage/main.php"><p style="float:left;color:black"> <i class="fa fa-backward fa-3x" ></i></p> </a>

</body>
</html> 