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
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
   


}
.done{
  border: 0;
  background:rgba(255, 255, 255, 0.76);
display: block;
margin:5px auto;
text-align: center;
border: 2px solid #3498db;
padding: 5px 5px;
width: auto;
color: white;
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color: #00ff4cbe;


}

  </style>
</head>
<body>
  <div class="box">


</div>

</body>
</html>


<?php
session_start();
//the sesisons
$subject_session = $_SESSION['glob_subject'];
$form_session = $_SESSION['glob_form'];
$stream_session = $_SESSION['glob_stream'];
$exam_session = $_SESSION['glob_exam'];
$term_session = $_SESSION['glob_term'];
$year_session = $_SESSION['glob_year'];
$adm_session=$_SESSION['glob_adm_no'];  //for adm_no

$final_marks=$_POST['final_mark'];
//table_name from sessions
$table_name= $exam_session.'_'.$form_session.$stream_session.'_'.$term_session.'_'.$year_session;


//connection one
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form1";
$con=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"failed to connect";
    exit();
}


//connection two
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form2";


$con2=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo" two failed to connect<br>";
    exit();
}


//connection three
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form3";


$con3=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"three failed to connect<br>";
    exit();
}


//connection four
$server= "localhost:3306";
$user="techkeyco_marks";
$password ="schoolRoot@db";
$dbname="techkeyco_form4";


$con4=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"four failed to connect<br>";
    exit();
}


//above is end of connections

//adding begins
//adding form one :ex opener_1red_term1  operner_2blue_term1



if($form_session == 1){

  $sql= "UPDATE $table_name SET $subject_session = $final_marks WHERE adm_no =$adm_session";
  if ($con->query($sql) === TRUE) {
    header('Location: http://school.techkey.co.ke/select_subject.php');
    } else {
      echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
    }
    
    $con->close();


}
elseif($form_session == 2){
$sql= "UPDATE $table_name SET $subject_session = $final_marks WHERE adm_no =$adm_session";
if ($con2->query($sql) === TRUE) {
  header('Location: http://school.techkey.co.ke/select_subject.php');
  } else {
    echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
  }
  
  $con->close();
  
}
elseif($form_session == 3){
  $sql= "UPDATE $table_name SET $subject_session = $final_marks WHERE adm_no =$adm_session";
  if ($con3->query($sql) === TRUE) {
    header('Location: http://school.techkey.co.ke/select_subject.php');
    } else {
      echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    
  }
  elseif($form_session == 4){
    $sql= "UPDATE $table_name SET $subject_session = $final_marks WHERE adm_no =$adm_session";
    if ($con4->query($sql) === TRUE) {
      header('Location: http://school.techkey.co.ke/select_subject.php');
      } else {
        echo "<br/>Error: inserting " . $sql . "<br>" . $con->error;
      }
      
      $con->close();
    }




echo"done";


?>