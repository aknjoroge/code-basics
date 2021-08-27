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



$hotelno=$_POST['hotel_no'];
$guestno=$_POST['guest_no'];

$datefrom=$_POST['date_from'];
$dateto=$_POST['date_to'];
$roomno=$_POST['room_no'];





if(empty($hotelno)){
    echo"Hotel number is empty<br>";
    echo"use The html  document <a href='booking.html'>here</a> to enter data";
    exit;
    }
    if(empty($guestno)){
        echo"Guest number is empty<br>";
        echo"use The html  document <a href='booking.html'>here</a> to enter data";
        exit;
        }
        if(empty($datefrom)){
            echo"Date From is empty<br>";
            echo"use The html  document <a href='booking.html'>here</a> to enter data";
            exit;
            }
            if(empty($dateto)){
                echo"Date to is empty<br>";
                echo"use The html  document <a href='booking.html'>here</a> to enter data";
                exit;
                }
                if(empty($roomno)){
                    echo"Room number is empty<br>";
                    echo"use The html  document <a href='booking.html'>here</a> to enter data";
                    exit;
                    }
                 
            


$sql="INSERT INTO `booking`( `Hotel_No`,`Guest_No`, `Date_From` ,`Date_To`,`Room_NO`) VALUES ('$hotelno','$guestno','$datefrom','$dateto','$roomno')";

if($con->query($sql) == true){
   
    echo "<br/>New record created <br>";
    echo"View Book<a href='bookingview.php'> here</a>";
   } else {
     echo "<br/> Error: inserting " . $sql . "<br>" . $con->error;
     echo"Go back<a href='bookingview.php'> here</a>";
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