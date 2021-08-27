<?php
$server="localhost";
$user="class";
$password="class";
$database="class";

$con=mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_error()){
    echo" Connection Failed <br>";
    exit;
}
if(!(mysqli_connect_error())){
    echo"connection successfull<br>";
}


$idtodelete=$_POST['idremove'];


 $sql="Delete from booking where id=$idtodelete";
if(mysqli_query($con,$sql))
{
    $sql="ALTER TABLE `room` DROP `id`";
    mysqli_query($con,$sql);
    $sql="ALTER TABLE `room` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD UNIQUE (`id`)";
    mysqli_query($con,$sql);
    echo"delete successfull<br>";
    echo"View Booking <a href='bookingview.php'>Here</a><br>";

}
else
{
    echo "<br/> Error: inserting " . $sql . "<br>" . $con->error;
    echo"View  Booking <a href='bookingview.php'>Here</a><br>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style>
       body{
           background-color: tomato;
           text-align: center;
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           font-weight: 600;
       }
   </style>
</head>
<body>
    
</body>
</html>