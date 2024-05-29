 <?php
 
 include("contact_db.php");
 extract($_POST);
 $sql = "INSERT INTO `contact-data`(`name`, `phone`, `email`, `message`) VALUES ('".$name."',".$phone.",'".$email."','".$message."')";
 $result = $mysqli->query($sql);
 if(!$result){
     die("Couldn't enter data: ".$mysqli->error);
 }
 echo "Message Sent Successfully!";
 $mysqli->close();
 ?>
