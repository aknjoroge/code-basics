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
label{
    color: white;
    font-weight: 500;

}

select{
    border: 0;
background: none;
display: block;
margin:5px auto;
text-align: center;
border: 2px solid #3498db;
padding: 5px 5px;
width: 150px;
color: white;
outline: none;
border-radius: 14px;
transition: 0.25s;
border-color: #3498db;  
}
.one input[type="password"],.one input[type="password"]{
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
.one input[type="password"]:focus,.box input[type="password"]:focus{
    width: 280px;
    border-color: #2ecc71;
}

.one input[type="submit"]{
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
border-color: #0051ff;

}
        
    </style>
</head>
<body>
    
<div class="one">

<form action="password.php" method="POST">

    <label>Type</label><br>
<select name="type">
    <option value="NULL"></option>
<option value="admin">ADMIN</option>
<option value="login">LOGIN</option>
</select>

<label>department</label><br>

<select name="department">
    <option value="NULL"></option>
    <option value="sci">SCIENCE</option>
    <option value="huma">HUMANITIES</option>
    <option value="lang">LANGUAGES</option>
    <option value="tech">TECHNICAL</option>
    <option value="art">ART</option>

    </select><br>
    <label>password</label><br>
<input type="password"  name="current" placeholder="CURRENT PASSWORD"/>
<input type="password"  name="new" placeholder="NEW PASSWORD"/>
<input type="password"  name="confirm" placeholder="CONFIRM PASSWORD"/>


<input type="submit" value="submit" name="submit"/>

</form>



</div>

</body>
</html>