<?php

require_once ('global_login.php');

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
    top: 5%;
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

.box label{
    color: white;
    font-weight: 500;
}
box label{
    color: white;
    font-weight: 500;
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
border-color: #88ff00;

}
.done{
    border: 0;
background: none;
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
border-color: #f02b1d;  
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


    </style>
</head>
<body>
    <div class="inn">
        <div class="content">
    <form action="enter_adm.php" method="POST" class="box">

        <label class="subject"> SUBJECT</label>
<select name="subject">

<option value="math">mathematics</option>
<option value="eng">english</option>
<option value="kisw">kiswahili</option>
<option value="chem">chemistry</option>
<option value="bio">biology</option>
<option value="phy">physics</option>
<option value="cre">CRE</option>
<option value="art">art</option>
<option value="hist">history</option>
<option value="geo">Geography</option>
<option value="bs">business</option>
<option value="agri">agriculture</option>
<option value="hs">homescience</option>
<option value="music">music</option>

</select>
<label class="subject"> FORM</label>
<select name="form">
    <option value="1">one (1) </option>
    <option value="2">two (2)</option>
    <option value="3">three(3) </option>
    <option value="4">four(4)</option>
    
</select>
<label class="exsubject" >stream</label>
<select name="stream">
    <option value="blue">blue</option>
    <option value="red">red</option>
    
</select>
<br>
<br>
<label class="subject"> EXAM TYPE</label>
<select name="type_of_exam">
    <option value="opener">Opener</option>
<option value="midterm">Mid-Term</option>
<option value="endterm">End-Term</option>
</select>

<label class="subject">Term</label>
<select name="term">
    <option value="term1">ONE</option>
<option value="term2">TWO</option>
<option value="term3">THREE</option>


</select>

<label class="subject">Year</label>
<select name="year">
    <option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>

</select>
<br>
<hr>
<h3 class="subject">Enter_Department_password</h3>

<input type="password" name="dep_pass" class="dep"></input>

<input type="submit" name="submit" value="next">
<BR>
<button class="done";><a href="school.techkey.co.ke/home" 
    style="color: aliceblue;text-decoration: none;"> EXIT</a></button>  
    </form>
</div>

</div>
</body>
</html>