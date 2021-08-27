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
$passtaken=$_POST['pass'];
echo"$passtaken";

$settablename="passwords";

$sql2= "SELECT * FROM `$settablename` WHERE type = 'login' ";

$intake =$con -> query($sql2);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){

$takepass=$row["pass"];
$takeusr=$row["user"];


    }}else{echo"no data";}

echo$takepass;
echo$takeusr;

    ?>