<?php

//Connecting with database
$conn = new mysqli("localhost","root","","auth");

//CHECK THE CONNECTION
if($conn == false){
    echo('can not connect');
}
else{
    // echo ('connected');
}

?>