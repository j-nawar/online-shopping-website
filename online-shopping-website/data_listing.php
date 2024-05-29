<?php

include("contact_db.php");

echo '<stronger>' . "Data Listing Page";

echo '<strong>'."Name & Messages:" .'</strong><br><br>'; 

$sql = "SELECT * FROM `contact-data`";

$result = $mysqli->query($sql);

if($result){
while($data = mysqli_fetch_assoc($result)){
   $name = $data['name']; 
   $message = $data['message'];

   echo $name. '<br>'; 
   echo $message;
   echo '<br><br>';

    }
}



?>

