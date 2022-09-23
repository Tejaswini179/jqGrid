<?php

// define('DB_SERVER','localhost');
// define('DB_USERNAME','root');
// define('DB_PASSWORD','');
// define('DB_name','auth');

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