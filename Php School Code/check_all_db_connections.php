<?php
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form1";


$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo" one failed to connect<br>";
    exit();
}
echo" connection one success<br>"; 

//two
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form2";


$con2=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo" two failed to connect<br>";
    exit();
}
echo" connection two success<br>"; 

//three
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form3";


$con3=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"three failed to connect<br>";
    exit();
}
echo" connection three success<br>"; 

//four
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form4";


$con4=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"four failed to connect<br>";
    exit();
}
echo" connection four success<br>"; 



echo"done";






?>