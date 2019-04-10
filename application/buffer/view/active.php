<?php
$con = mysqli_connect("188.131.129.161", "student", "ZrjmHzt8pdMtS7yL", "daily_manage");
if(!$con){
    echo "<script> alert('Wrong user or passwod!');</script>"; 
    die('Could not connect: ' . mysql_error()); 
}
?>
