<?php
    session_start();
    $link= new mysqli("localhost","root","","project");
    if ($link->connect_error)
    {
        die("Connection Failure".$link->connect_error);
    }
 $tablename=mysqli_real_escape_string($link,$_SESSION['uname']);
//  $sql = "CREATE TABLE ".$tablename."( bname VARCHAR(30), taname VARCHAR(30), tbgenre VARCHAR(10),tbookid INT(5))";
//         mysqli_query($link,$sql);
//         if ($link->query($sql) === TRUE) {
//             echo "Table MyGuests created successfully";
//         } else {
//             echo "Error creating table: " . $link->error;
//         }
     $rno=$_POST['check1'];
     foreach ($rno as $a1)
     {
     $a="INSERT INTO  ".$tablename." (bname,taname,tbgenre, tbookid) SELECT  name,author, genre, book_id  FROM books WHERE book_id=".number_format($a1);
     mysqli_query($link,$a);
      if ($link->query($a) === TRUE) 
     {
                echo "okay";
            } else {
                echo "Error updating record: " . $link->error;
          }
    }
header("Location: /turnapage/mainpage/main.php")    
    

// mysqli_query($link,$sql); 
?>