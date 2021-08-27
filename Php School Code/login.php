<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
   background: #34495e; font-family: sans-serif; margin:0;
}
.table{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    background:#191919;

}
.table td{
    color: white;
    font-weight: 500;
}

    </style>
</head>
<body>
    
<?php

$one =$_POST['username'];
$two = $_POST['password'];

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

$takepass;
$takeusr;



$_SESSION ['password']=$takepass;
$_SESSION ['username']=$takeusr;
$_SESSION ['inatakepassword']=$two;
$_SESSION ['intakeusername']=$one;
$_SESSION['global']="1";

if($_SESSION ['intakeusername']==$_SESSION ['username'] && $_SESSION ['inatakepassword'] ==$_SESSION ['password']){
    $_SESSION['global']="1";
    header('Location: http://www.school.techkey.co.ke/home');

}
elseif($_SESSION ['intakeusername']!=$_SESSION ['username'] && $_SESSION ['inatakepassword'] ==$_SESSION ['password']){
    echo"<table class='table'>";
    echo"<td class='name'> failed username <td>";
    echo"</table>";
}
elseif($_SESSION ['intakeusername']==$_SESSION ['username'] && $_SESSION ['inatakepassword'] !=$_SESSION ['password']){
    echo"<table class='table'>";
    echo" <td class='name'>failed password <td>";
    echo"</table>";
}
elseif($_SESSION ['intakeusername']!=$_SESSION ['username'] && $_SESSION ['inatakepassword'] !=$_SESSION ['password']){
    echo"<table class='table'>";
    
    echo"<td class='name'>incorrect details<td>";

    echo"</table>";

}

?>


</body>
</html>



