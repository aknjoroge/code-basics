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
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 10%;
    left: 35%;
   text-align: center;
    background:#191919;

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
select{
    border: 0;
background: none;
display: block;
margin:5px auto;
text-align: center;
border: 2px solid #3498db;
padding: 5px 5px;
width: 70px;
color: white;
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color: #3498db;  
}
.box input[type="text"]:focus,.box input[type="text"]:focus{
    width: 280px;
    border-color: #2ecc71;
}

.box h3{
    color: white;
    font-weight: 500;
}
.box input[type="submit"]{
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
.labels{
    border: 0;
background: none;
display: block;
margin:5px auto;
text-align: center;
border: 0.5px solid #3498db;
padding: 5px 5px;
width: 100px;
color: white;
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color:#3498db;

}
    </style>
</head>
<body>
<div class="first">

    <div class="content">
   <form action="insert_student.php" method="POST" class="box">

     <h3 >STUDENT ENTRY</h3>
       <hr>
       

<input type="text" name="name" placeholder="NAME"></input>



<input type="text" name="adm" placeholder="ADMISSION NO"></input>

<label class="labels">FORM</label>
<select name="form">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
    
<br>

<input type="text" name="kcpe" placeholder="KCPE"></input>


<input type="text" name="contact" placeholder="CONTACT"></input>


<input type="text" name="pri" placeholder="PRIMARY SCHOOL"></input>

    
<label class="labels">YEAR</label>
<select name="year">
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    </select>
<br>
<label class="labels">STREAM</label>
<select name="stream">
<option value="red">red</option>
<option value="blue">blue</option>
</select>
<BR>
    <br><hr>
<input type="submit" value="submit" name="submit" class="submit"></input>

   </form> </div>
</div>
</body>
</html>