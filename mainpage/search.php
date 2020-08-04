<?php
$link= new mysqli("localhost","root","","project");
if ($link->connect_error)
{
    die("Connection Failure".$link->connect_error);
}
if($_POST['searchstr']=="")
{
    header("Location: http://localhost/turnapage/mainpage/searchform.php");
}
else
{   $data=$_POST['searchstr'];
    $search_query="SELECT * FROM books WHERE name LIKE '%$data%' OR author LIKE'%$data%' OR genre LIKE '%$data%' ";
    $result=mysqli_query($link,$search_query);
    if(mysqli_num_rows($result)!=0)
    {
    $search_rs=mysqli_fetch_assoc($result);
    }
    else
    echo "No books found";
}
?>
<html>
    <head>

        <title> Book search </title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="\turnapage\mainpage\search.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <head>
    <body>
    <body class="bg">
    <a href="/turnapage/mainpage/searchform.php"><p style="float:left"> <i class="fa fa-backward fa-2x" ></i></p> </a>
    <h1 style="color:#011b44;text-align:center;background-color:#c5cddb"> Books found: </h1>
        <?php 
            if(mysqli_num_rows($result)!=0)
            {
                do{
                    ?>
                    <div class="list-type5">
                    <ol>
                    <li> Book Name: <?php echo $search_rs['name']; ?> </li>
                    <li> Author Name: <?php echo $search_rs['author']; ?></li>
                    <li> Genre: <?php echo $search_rs['genre']; ?></li>
                    <li> Source: <a href="<?php echo $search_rs['source']?>"> Go to link </a> </li>
                    <li> Blurb: <?php echo $search_rs['blurb']; ?> </li>
                    <hr/> <hr/> <hr/><br/>
                    </ol>
                </div>
                <?php                     
                }while($search_rs=mysqli_fetch_assoc($result));
            }
            else
            {
                echo "<h4> No Books found</h4>";
            }
        ?>
    </body>
<html>