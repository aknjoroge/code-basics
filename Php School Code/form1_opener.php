<?php
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form1";


$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}
echo" connection success"; 

$user="techkeyco_root";
$password ="schoolRoot@db";
$dbname="techkeyco_schooldb";


$conn=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"<br>failed to connect TWICE";
    exit();
}
echo" <br> connection TWO success"; 

$sql= "SELECT * FROM `student` WHERE adm_no= '8642' ";
$intake=$conn -> query($sql);

$takename;
$takeadm ;
$takekcpe;
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
       $takename=$row["name"];
        $takeadm =$row["adm_no"];
       $takekcpe=$row["kcpe"];
       ;
    } 

}
else{
    echo"no data";
}
echo "$takename";
echo "$takeadm"; 
echo "$takekcpe";

$add_toname=$takename;
$add_toadm=$takeadm;
$add_tope=$takekcpe;


$sql= "INSERT INTO `opener_1red_term1_2020` (`id`, `name`, `adm`, `kcpe`, `eng`, `kisw`, `math`, `chem`, `phy`, `bio`, `cre`, `hist`, `geo`,`agric`,`bs`,`art`,`hs`,`music`,`tot`,`ave`,`grade`)
VALUES (null,'$add_toname', '$add_toadm','$add_tope' ,'39','26','74','55','55','40','56','0','-1','-1','61','-1','-1','-1','-1','-1','z') ";
if ($con->query($sql) === TRUE) {
    echo "<br/>New record created ";
  } else {
    echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
  }
  
  $con->close();




?>