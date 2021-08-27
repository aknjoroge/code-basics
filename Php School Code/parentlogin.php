
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
.one{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    background:#191919;

}


    </style>
</head>
<body>
    
</body>
</html>


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
$inpass=$_POST['password'];
$inusr=$_POST['user'];


$settablename="passwords";

$sql2= "SELECT * FROM `$settablename` WHERE type = 'parent' ";
$intake =$con -> query($sql2);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){

$takepass=$row["pass"];
$takeusr=$row["user"];


    }}else{echo"no data";}

    if($inpass==$takepass && $inusr==$takeusr){
        $_SESSION['parent']="1";
        header('Location: http://school.techkey.co.ke/student_get_data_parent.php');
    }
    else{
        echo"<div class='one' style='color: honeydew;' ><h3>IN CORRECT DETAILS</h3></div>";
    }



?>