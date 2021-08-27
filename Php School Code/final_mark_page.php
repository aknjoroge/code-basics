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
    background:#191919;


}
.box td{
    color: white;
    font-weight: 500;
}
.box h3{
    color: white;
    font-weight: 500;
}
.box input[type="text"],.box input[type="text"]{
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
.box input[type="text"]:focus,.box input[type="text"]:focus{
    width: 180px;
    border-color: #2ecc71;
}
.box input[type="submit"]{
    border: 0;
background: rgb(89, 175, 81);
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
<table class="box">

<form action="input_final_marks.php" method="POST">

   
        <tr><td><h3 class="con">ENTER MARKS</h3></td></tr>
       <tr> <td><input type="text" name="final_mark"class="con" placeholder="marks" ></input></td></tr>
        <tr><td><input type="submit" name="submit" value="add" class ="submit"></submit></td></tr>
        <tr><td><hr></td></tr>
        <br>
</form>

    

</body>
</html>
<?php


session_start();

$takeadm_no=$_POST['adm_no1'];
//adm_no_sessions
$_SESSION['glob_adm_no']=$takeadm_no;

//other intake sessions
$subject_session = $_SESSION['glob_subject'];
$form_session = $_SESSION['glob_form'];
$stream_session = $_SESSION['glob_stream'];
$exam_session = $_SESSION['glob_exam'];
$term_session = $_SESSION['glob_term'];
$year_session = $_SESSION['glob_year'];

//confirm sessions

echo"<tr class='con'>";
echo'<tr><td >Subject :'.$subject_session.'<td></tr>'.
'<tr><td >Form :'.$form_session.$stream_session.'<br></td></tr>'.
'<tr><td>Exam type : '.$exam_session.'<br></td> </tr>'.
'<tr><td>Term : '.$term_session.'<br></td></tr>'.
'<tr><td>Year : '.$year_session.'<br></td></tr>';
echo"</tr>";



//conenct to school->students

$user="techkeyco_root";
$password ="schoolRoot@db";
$dbname="techkeyco_schooldb";

$conn=mysqli_connect($Server,$user,$password,$dbname);
if(mysqli_connect_error()){
    echo"<br>CONNECTION TWO FAILED";
    exit();
}

//students table
$sql= "SELECT * FROM `student` WHERE adm_no= '$takeadm_no' ";
$intake=$conn -> query($sql);

$takename;
$takeadm ;
$takekcpe;
$line="-----------------------------";
if($intake->num_rows >0){ 
    while($row =$intake -> fetch_assoc()
    ){
        echo"<tr><td>".$line."</td> </tr>";
       echo"<tr><td>Name is :".$takename=$row["name"]."</td> </tr>";
        echo"<tr><td>Adm is :".$takeadm =$row["adm_no"]."</td> </tr>";
       echo"<tr><td>Kcpe is :".$takekcpe=$row["kcpe"]."</td> </tr> " ;
       echo"<tr><td>Subject is :".$takesub=$subject_session."</td> </tr>";
       echo"<tr><td>Stream is :".$takestream=$stream_session."</td> </tr>";
       
      
    } 
    echo"</table>";
}
else{
    echo"<table class='box'>";
    echo"no data";
    echo"</table>";
}





?>