<?php

define('DB_SERVER','');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
DEFINE('DB_name','task1');

//Connecting with database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_name);

//CHECK THE CONNECTION
if($conn == false){
    echo('can not connect');
}
// else{
//     echo ('connected');
// }

?>