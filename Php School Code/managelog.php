<?php
$server= "localhost:3306";
$user="techkeyco_orders";
$password ="_5Cs~Mt@=*3r";
$dbname="techkeyco_orders";


$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"connection error";
    exit();
}

$adduser = $_POST['name'];
$addpass = $_POST['pass'];

$sql= "INSERT INTO `manage` (`id`, `usr`, `pass`) 
VALUES (null,'$adduser','$addpass')";
if ($con->query($sql) === TRUE) {
 
    echo "<br/> <td>New record created </td>";
  } else {
    echo "<br/> <td>Error: inserting <td> " . $sql . "<br>" . $con->error;
  }
 
  $con->close();



?>