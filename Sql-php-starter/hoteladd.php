

<?php  //This document is the back end side of adding data to the hotel table 

// Here its declared the server name in our case local host, username of user privilidged to use the database
// the user is set up in Mamp/any server in phpMyadmin section, password given to user, databasename respectively)
$Server= "localhost";
$user="class";
$password ="class";
$dbname="class";



//this test the connection to the local database and returns the result
$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}
if(!(mysqli_connect_error())){
    echo"success <br>";
    
}
//The variables here store data from the front end file using the names they were given
$hotelno=$_POST['hotel_no'];
$hotelname=$_POST['hotel_name'];
$hotelcity=$_POST['hotel_city'];

//The if statements below are used to confirm the user didnt leave a field empty
if(empty($hotelno)){
echo"Hotel number is empty<br>";
echo"use The html  document <a href='hotelladd.html'>here</a> to enter data";
exit;
}

if(empty($hotelname)){
  echo"Hotel name is empty<br>";
  echo"use The html  document <a href='hotelladd.html'>here</a> to enter data";
  exit;
  }

  if(empty($hotelcity)){
    echo"Hotel City is empty<br>";
    echo"use The html  document <a href='hotelladd.html'>here</a> to enter data";
    exit;
    }


//This is an SQL command to insert the data
$sql="INSERT INTO `hotel`( `Hotel_No`, `Name` ,`City`) VALUES ('$hotelno','$hotelname','$hotelcity')";
// the function below confirms if data is inserted successfull if not it displays an error 
if($con->query($sql) == true){
   
    echo "<br/>New record created <br>";
    echo "view Hotel list <a href='hotelview.php'>here</a>";
   } else {
     echo "<br/> Error: inserting " . $sql . "<br>" . $con->error;
   }
  
  $con->close();



echo"end";

?>

<!DOCTYPE html>

<!--the document below is just used for styling-->
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