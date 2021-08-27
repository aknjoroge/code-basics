<?php
$Server= "localhost";
$user="class";
$password ="class";
$dbname="class";




$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}
if(!(mysqli_connect_error())){
    echo"success <br>";
    
}
$roomno=$_POST['room_no'];
$hotelno=$_POST['hotel_no'];
$roomtype=$_POST['room_type'];
$roomprice=$_POST['room_price'];


if(empty($roomno)){
    echo"Room number is empty<br>";
    echo"use The html  document <a href='addroom.html'>here</a> to enter data";
    exit;
    }
    if(empty($hotelno)){
        echo"Hotel number is empty<br>";
        echo"use The html  document <a href='addroom.html'>here</a> to enter data";
        exit;
        }
        if(empty($roomtype)){
            echo"Room Type is empty<br>";
            echo"use The html  document <a href='addroom.html'>here</a> to enter data";
            exit;
            }
            if(empty($roomprice)){
                echo"Room price is empty<br>";
                echo"use The html  document <a href='addroom.html'>here</a> to enter data";
                exit;
                }
            


$sql="INSERT INTO `room`( `Room_No`,`Hotel_NO`, `Type` ,`Price`) VALUES ('$roomno','$hotelno','$roomtype','$roomprice')";

if($con->query($sql) == true){
   
    echo "<br/>New record created <br>";
    echo"View Rooms<a href='roomview.php'> here</a>";
   } else {
     echo "<br/> Error: inserting " . $sql . "<br>" . $con->error;
   }
  
  $con->close();





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

