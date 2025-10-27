<?php
$servername  = "localhost";
$username ="root";
$password ="";
$dbname ="mfayaz_phpdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){ 
    echo"Connection Failed";
}
else{
    echo "Connection Successfully";
}

?>