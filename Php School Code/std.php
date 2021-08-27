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

$name=$_POST['name'];
$adm=$_POST['adm'];
$tel=$_POST['tel'];
$kcpe=$_POST['kcpe'];
$school=$_POST['school'];
$year=$_POST['year'];


$sql="INSERT INTO `student` (`id`, `name`, `adm_no`, `contact`, `kcpe`, `primary_school`, `year`) VALUES 
(NULL, '$name', '$adm', '$tel', '$kcpe', '$school', '$year')";
mysqli_query($con,$sql);

?>