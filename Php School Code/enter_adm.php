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
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    background:#191919;

}
.table h3{
    color: white;
    font-weight: 500;
}
.table th{
    color: white;
    font-weight: 500;
}
.table td{
    color: white;
    font-weight: 500;
}
.table input[type="text"],.box input[type="text"]{
border: 0;
background: none;
display: block;
margin:10px auto;
text-align: center;
border: 2px solid #3498db;
padding: 15px 10px;
width: 200px;
color: white;
outline: none;
border-radius: 24px;
transition: 0.25s;

}

.table input[type="text"]:focus,.box input[type="text"]:focus{
    width: 250px;
    border-color: #2ecc71;
}

.table input[type="submit"]{
    border: 0;
background: none;
display: block;
margin:5px auto;
text-align: center;
border: 2px solid #3498db;
padding: 5px 5px;
width: 100px;
color: white;
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color: #48ff00;

}
    </style>
</head>
<body>


<form action="final_mark_page.php" method="POST"> 
<?php
session_start();

$insubject=$_POST['subject'];
$inform=$_POST['form'];
$instream=$_POST['stream'];
$inexam=$_POST['type_of_exam'];
$interm=$_POST['term'];
$inyear=$_POST['year'];
$intake_pass=$_POST['dep_pass'];

//sessions
$_SESSION['glob_subject'] = $insubject;
$_SESSION['glob_form'] = $inform;
$_SESSION['glob_stream'] = $instream;
$_SESSION['glob_exam'] = $inexam;
$_SESSION['glob_term'] = $interm;
$_SESSION['glob_year'] = $inyear;


$server= "localhost:3306";
$user="techkeyco_root";
$password ="schoolRoot@db";
$dbname="techkeyco_schooldb";

$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}$settablename="passwords";



$sql2= "SELECT * FROM `$settablename` WHERE user = '$insubject' ";

$intake =$con -> query($sql2);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){

$takepass=$row["pass"];

    }}else{
        echo"no data";
    }



$pass=$intake_pass;
$take=$takepass;



if($take == $pass){
  

    echo'<table class="table" >';
    echo"<tr><th>ENTER ADMISSION NUMBER OF THE STUDENT</th></tr>";
   echo" <td><input type='text' name='adm_no1' placeholder='ADMISSION' ></input></td>";
echo" <td><input type='submit' name='submit' value='go'></input> <td>";



}

else {
    echo'<table class="table" >';
    echo"<th>wrong department password<th>";
echo'</table>';
}
?> </form>


</body>
</html>