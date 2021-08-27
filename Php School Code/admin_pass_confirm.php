<?php
session_start();
?>


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
$user="admin";

$sql2= "SELECT * FROM `$settablename` WHERE type = 'admin' ";

$intake =$con -> query($sql2);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){

$takepass=$row["pass"];


    }}else{echo"no data";}
    
if( $passtaken== $takepass ){
    $_SESSION['admin']="1";
    header('Location: http://www.school.techkey.co.ke/admin');
}
else{
    header('Location: http://www.school.techkey.co.ke/home');
}


?>