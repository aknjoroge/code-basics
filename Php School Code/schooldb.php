<?php
$server= "localhost:3306";
$user="techkeyco_root";
$password ="schoolRoot@db";
$dbname="techkeyco_schooldb";


$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}
echo" connection success"; 

$sql= "INSERT INTO `teacher` (`id`, `dept`, `tsc`, `name`, `subject`) VALUES (null,'languages',444535642,'marking','biology')";
if ($con->query($sql) === TRUE) {
    echo "<br/>New record created ";
  } else {
    echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
  }
  
  $con->close();


?>