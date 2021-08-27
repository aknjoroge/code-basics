<?php

require_once ('global_login.php');
require_once ('verify_adminlogin.php');

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
.one{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    background:#191919;

}
.done{
  border: 0;

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
border-color: #00ff4cbe;


}

    </style>
</head>

<body>
    <div class="one">
<button class="done">
<a href="school.techkey.co.ke/admin" style="text-decoration: none;" >GO BACK </a>
</button>

    </div>
</body>
</html>

<?php
$term=$_POST['term'];
$year=$_POST['year'];
$exam=$_POST['exam'];
$dbnamee="techkeyco_form1";



$server= "techkey.co.ke";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form1";


$con1=mysqli_connect($server,$user,$password,"techkeyco_form1");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$conn=mysqli_connect($server,"techkeyco_root","schoolRoot@db","techkeyco_schooldb");
if(mysqli_connect_error()){
    echo"failed to connect Server 2";
    exit();
}

$con2=mysqli_connect($server,$user,$password,"techkeyco_form2");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$con3=mysqli_connect($server,$user,$password,"techkeyco_form3");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}

$con4=mysqli_connect($server,$user,$password,"techkeyco_form4");
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}



$form=1;

//Arraysto store Streams
$st=0;
$streams=array("red","blue");




// Connections to Databases
$cn=1;



for($i=0;$i<=3;$i++)
{

$conns=$con."".$cn;
    
if($form==1)
{
   $dn="techkeyco_form".$form;
 $a=0;
 while($a<=1)
 {
     $stream=$streams[$st];
      $tablename="".$exam."_".$form."".$stream."_".$term."_".$year;
     $sql="CREATE TABLE `$dn`.`$tablename` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `adm_no` INT NOT NULL ,
`kcpe` INT NOT NULL , PRIMARY KEY (`adm_no`), UNIQUE (`id`))  ";
if (mysqli_query($con1,$sql)) 
{
    $sql="ALTER TABLE `$tablename` ADD `eng` INT NULL AFTER `kcpe`, ADD `kisw` INT NULL AFTER `eng`,
       ADD `math` INT NULL AFTER `kisw`, ADD `chem` INT NULL AFTER `math`, 
       ADD `phy` INT NULL AFTER `chem`, ADD `bio` INT NULL AFTER `phy`, 
       ADD `cre` INT NULL AFTER `bio`, ADD `hist` INT NULL AFTER `cre`, 
       ADD `geo` INT NULL AFTER `hist`, ADD `agric` INT NULL AFTER `geo`, 
       ADD `bs` INT NULL AFTER `agric`, ADD `art` INT NULL AFTER `bs`, 
       ADD `hs` INT NULL AFTER `art`, ADD `music` INT NULL AFTER `hs`, ADD `tot` INT NULL AFTER `music`, 
       ADD `ave` INT NULL AFTER `tot`, ADD `grade` VARCHAR(20) NULL AFTER `ave`";

if (mysqli_query($con1,$sql)) 
{
$sqll= "SELECT * FROM `student` WHERE form=$form and stream='$stream' ";
$intake=$conn -> query($sqll);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        $takename=$row["name"];
        $takeadm =$row["adm_no"];
       $takekcpe=$row["kcpe"];
       
        $sql= "INSERT INTO `$tablename` (`id`, `name`, `adm_no`, `kcpe`)
        values(null,'$takename','$takeadm','$takekcpe')";
       mysqli_query($con1,$sql);
    } 

}
else{
    echo"no data";
 
}
    
}
else{
    echo ", Failed to add some columns";

}
   
    
}


else{
    echo "The Table Already Exist";
   
    
}

     
     $st=$st+1;
     $a=$a+1;
 }
 

}




if($form==2)
{
    $dn="techkeyco_form2";
  $b=0;
  $st=0;
 while($b<=1)
 {
     $stream=$streams[$st];
      $tablename=$exam."_".$form."".$stream."_".$term."_".$year;
     $sql="CREATE TABLE `$dn`.`$tablename` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `adm_no` INT NOT NULL ,
`kcpe` INT NOT NULL , PRIMARY KEY (`adm_no`), UNIQUE (`id`))  ";
if (mysqli_query($con2,$sql)) 
{
    $sql="ALTER TABLE `$tablename` ADD `eng` INT NULL AFTER `kcpe`, ADD `kisw` INT NULL AFTER `eng`,
       ADD `math` INT NULL AFTER `kisw`, ADD `chem` INT NULL AFTER `math`, 
       ADD `phy` INT NULL AFTER `chem`, ADD `bio` INT NULL AFTER `phy`, 
       ADD `cre` INT NULL AFTER `bio`, ADD `hist` INT NULL AFTER `cre`, 
       ADD `geo` INT NULL AFTER `hist`, ADD `agric` INT NULL AFTER `geo`, 
       ADD `bs` INT NULL AFTER `agric`, ADD `art` INT NULL AFTER `bs`, 
       ADD `hs` INT NULL AFTER `art`, ADD `music` INT NULL AFTER `hs`, ADD `tot` INT NULL AFTER `music`, 
       ADD `ave` INT NULL AFTER `tot`, ADD `grade` VARCHAR(20) NULL AFTER `ave`";

if (mysqli_query($con2,$sql)) 
{
$sqll= "SELECT * FROM `student` WHERE form=$form and stream='$stream' ";
$intake=$conn -> query($sqll);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        $takename=$row["name"];
        $takeadm =$row["adm_no"];
       $takekcpe=$row["kcpe"];
       
        $sql= "INSERT INTO `$tablename` (`id`, `name`, `adm_no`, `kcpe`)
        values(null,'$takename','$takeadm','$takekcpe')";
       mysqli_query($con2,$sql);
    } 

}
else{
    echo"no data";
   
}
}   
else{
    echo ", Failed to add some columns";
   
    
}
   
    
}


else{
    echo "The Table Already Exist";
    
    
}

     
    $st=$st+1;
     $b=$b+1;
 }
}



if($form==3)
{
    $st=0;
    $dn="techkeyco_form3";
  $s=0;
 while($s<=1)
 {
     $stream=$streams[$st];
     $tablename=$exam."_".$form."".$stream."_".$term."_".$year;
     $sql="CREATE TABLE `$dn`.`$tablename` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `adm_no` INT NOT NULL ,
`kcpe` INT NOT NULL , PRIMARY KEY (`adm_no`), UNIQUE (`id`))  ";
if (mysqli_query($con3,$sql)) 
{
    $sql="ALTER TABLE `$tablename` ADD `eng` INT NULL AFTER `kcpe`, ADD `kisw` INT NULL AFTER `eng`,
       ADD `math` INT NULL AFTER `kisw`, ADD `chem` INT NULL AFTER `math`, 
       ADD `phy` INT NULL AFTER `chem`, ADD `bio` INT NULL AFTER `phy`, 
       ADD `cre` INT NULL AFTER `bio`, ADD `hist` INT NULL AFTER `cre`, 
       ADD `geo` INT NULL AFTER `hist`, ADD `agric` INT NULL AFTER `geo`, 
       ADD `bs` INT NULL AFTER `agric`, ADD `art` INT NULL AFTER `bs`, 
       ADD `hs` INT NULL AFTER `art`, ADD `music` INT NULL AFTER `hs`, ADD `tot` INT NULL AFTER `music`, 
       ADD `ave` INT NULL AFTER `tot`, ADD `grade` VARCHAR(20) NULL AFTER `ave`";

if (mysqli_query($con3,$sql)) 
{
$sqll= "SELECT * FROM `student` WHERE form=$form and stream='$stream' ";
$intake=$conn -> query($sqll);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        $takename=$row["name"];
        $takeadm =$row["adm_no"];
       $takekcpe=$row["kcpe"];
       
        $sql= "INSERT INTO `$tablename` (`id`, `name`, `adm_no`, `kcpe`)
        values(null,'$takename','$takeadm','$takekcpe')";
       mysqli_query($con3,$sql);
    } 

}
else{
    echo"no data";
    
}
   
}
else{
    echo ", Failed to add some columns";
    
    
}
    
    
}


else{
    echo "The Table Already Exist";
    
    
}

     
     $st=$st+1;
     $s=$s+1;
 }
}




if($form==4)
{
    $st=0;
    $dn="techkeyco_form4";
 $d=0;
 while($d<=1)
 {
     $stream=$streams[$st];
      $tablename=$exam."_".$form."".$stream."_".$term."_".$year;
     $sql="CREATE TABLE `$dn`.`$tablename` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `adm_no` INT NOT NULL ,
`kcpe` INT NOT NULL , PRIMARY KEY (`adm_no`), UNIQUE (`id`))  ";
if (mysqli_query($con4,$sql)) 
{
    $sql="ALTER TABLE `$tablename` ADD `eng` INT NULL AFTER `kcpe`, ADD `kisw` INT NULL AFTER `eng`,
       ADD `math` INT NULL AFTER `kisw`, ADD `chem` INT NULL AFTER `math`, 
       ADD `phy` INT NULL AFTER `chem`, ADD `bio` INT NULL AFTER `phy`, 
       ADD `cre` INT NULL AFTER `bio`, ADD `hist` INT NULL AFTER `cre`, 
       ADD `geo` INT NULL AFTER `hist`, ADD `agric` INT NULL AFTER `geo`, 
       ADD `bs` INT NULL AFTER `agric`, ADD `art` INT NULL AFTER `bs`, 
       ADD `hs` INT NULL AFTER `art`, ADD `music` INT NULL AFTER `hs`, ADD `tot` INT NULL AFTER `music`, 
       ADD `ave` INT NULL AFTER `tot`, ADD `grade` VARCHAR(20) NULL AFTER `ave`";

if (mysqli_query($con4,$sql)) 
{
$sqll= "SELECT * FROM `student` WHERE form=$form and stream='$stream' ";
$intake=$conn -> query($sqll);
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        $takename=$row["name"];
        $takeadm =$row["adm_no"];
       $takekcpe=$row["kcpe"];
       
        $sql= "INSERT INTO `$tablename` (`id`, `name`, `adm_no`, `kcpe`)
        values(null,'$takename','$takeadm','$takekcpe')";
       mysqli_query($con4,$sql);
    } 

}
else{
    echo"no data";
    
}
  
}
else{
    echo ", Failed to add some columns";
    
    
}
    
    
}


else{
    echo "The Table Already Exist";
    
    
}

     
$st=$st+1;
     $d=$d+1; }
}


   $form=$form+1; 
    
}




$con->close();
$conn->close();

  

?>