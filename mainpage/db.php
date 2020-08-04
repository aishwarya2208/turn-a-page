<html>
<body>
<?php
echo "<table>";
    echo "<tr>"; 
    echo "<th> Select </th>"; 
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
    $rno=0 ;
}


else { 
echo "ERROR: Could not able to execute $sql. "
                            .mysqli_error($link); 
} 

echo  "<button type='submit'  value='submit'>Submit</button> ";
echo"</form>";
mysqli_close($link); 
?>
</body>
</html>

 