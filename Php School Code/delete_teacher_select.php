<?php

require_once ('global_login.php');
require_once ('verify_adminlogin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
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
.box input[type="text"]:focus,.box input[type="text"]:focus{
    width: 280px;
    border-color: #2ecc71;
}

.box h1{
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
border-color: #f52525;

}



    </style>

</head>
<body>
    <div class="inn">
        <div class="content">

    <form action="delete_teacher.php" method="POST" class="box">
       <h1>FILL IN</h1>

<input type="text" name="tsc_no" placeholder="enter Tsc number "> </input>



<input type="text" name="name" placeholder="Teacher name"></input>

<br><br><br>

<input type="submit" name="submit" value="delete" class="submit">




    </form>
</div>
</div>
</body>
</html>
