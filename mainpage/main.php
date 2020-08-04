<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="\turnapage\style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  background-color:#dbfff2;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 16px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
.sel{
  font-size:12px;
}

section{
  margin: 50px;
}

.top {
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

.top:hover {
  background-color: yellow; /* Add a dark-grey background on hover */
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="\turnapage\style.css">

</head>
<body class="bg">
<ul>
  <li><a class="active" href="/turnapage/mainpage/logout.php"><i class="fa fa-minus-circle" style="color:white"></i> &nbsp; Logout</a></li>
  <li><a href="/turnapage/mainpage/history.php"> <i class="fa fa-history" style="color:white"></i> &nbsp; History</a></li>
  <li><a href="/turnapage/homepage/contact.php"><i class="fa fa-wechat" style="color:white"></i> &nbsp; Contact</a></li>
  <li><a href="/turnapage/mainpage/searchform.php"><i class="fa fa-search" style="color:white"></i> &nbsp; Search</a></li>
  <li><a href="/turnapage/mainpage/quiz.html"><i class="fa fa-umbrella" style="color:white"></i> &nbsp; Take our quiz</a></li>
  <!-- <li><a href="#about">About</a></li> -->
</ul>
<a href="top"></a>

<?php
    $link= new mysqli("localhost","root","","project");
    if ($link->connect_error)
    {
        die("Connection Failure".$link->connect_error);
    }
$sql = "SELECT * FROM books";
if($res=mysqli_query($link, $sql))
?>

<form name="f" method="POST" action="temphistory.php">
<?php
if(mysqli_num_rows($res)>0){

    echo "<table style='background-color:#27967e'>";
    echo"<col width='5%'>
    <col width='20%'>
    <col width='15%'>
    <col width='7%'>
    <col width='8%'>
    <col width='10%'>
    <col width='35%'>";
    echo "<tr>"; 
    echo "<th class='sel'> Select </th>"; 
    echo "<th>Book</th>"; 
    echo "<th>Author</th>"; 
    echo "<th>Book Id</th>";
    echo "<th>Genre</th>";
    echo "<th>Source</th>"; 
    echo "<th>Blurb</th>";
    echo "</tr>"; 
        $rno=1;        
    while ($row = mysqli_fetch_array($res)) 
    { 
        echo "<tr>"; 
        echo "<td>  <input type='checkbox' name='check1[]' value='". $rno ."'> </td>";
        echo "<td>".$row['name']."</td>"; 
        echo "<td>".$row['author']."</td>"; 
        echo "<td>".$row['book_id']."</td>"; 
        echo "<td>".$row['genre']."</td>"; 
        ?> <td> <a href= "<?php echo $row['source'];?>"> Go to link</a> </td>
        <?php 
        echo "<td>".$row['blurb']."</td>"; 
        echo "</tr>"; 
        $rno++;
    }
    echo "</table>";
    $rno=0;

}
else { 
echo "ERROR: Could not able to execute $sql. "
                            .mysqli_error($link); 
} 
echo"<br/><center>";
echo  "<button type='submit'  value='Select' style='font-size:20px;'>Submit <i class='fa fa-hand-spock-o' style='color:black'></i></button>";
echo"</form>";
mysqli_close($link); 
?>
<a href="#top" class="top">Top</a>
</body>
</html>