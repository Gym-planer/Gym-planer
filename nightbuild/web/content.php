<?php
include 'db_connect.php';
include 'functions.php';
sec_session_start();
if(login_check($mysqli) == true) {
 
   echo 'HI ';
 	echo $_SESSION['username'];
echo '<br/>';
} else {
   echo 'You are not authorized to access this page, please login. <br/>';
}
?>