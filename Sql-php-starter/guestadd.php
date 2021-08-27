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



$guestno=$_POST['guest_no'];
$name=$_POST['name'];
$city=$_POST['city'];

if(empty($guestno)){
echo"Guest number is empty<br>";
echo"use The html  document <a href='guest.html'>here</a> to enter data";
exit;
}

if(empty($name)){
  echo" name is empty<br>";
  echo"use The html  document <a href='guest.html'>here</a> to enter data";
  exit;
  }

  if(empty($city)){
    echo" City is empty<br>";
    echo"use The html  document <a href='guest.html'>here</a> to enter data";
    exit;
    }



$sql="INSERT INTO `guest`( `Guest_No`, `Name` ,`City`) VALUES ('$guestno','$name','$city')";

if($con->query($sql) == true){
   
    echo "<br/>New record created <br>";
    echo" View Guest <a href='guestview.php'>Here<a>";
   } else {
     echo "<br/> Error: inserting " . $sql . "<br>" . $con->error;
   }
  
  $con->close();



echo"end";

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