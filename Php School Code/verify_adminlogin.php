<?php
session_start();
?>

<?php

if(!isset($_SESSION ['admin'])){
    header('Location: http://www.school.techkey.co.ke');
}
else{

}

?>