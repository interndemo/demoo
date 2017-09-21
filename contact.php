<?php
  
  
$name=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];
$mobile=$_POST['Mobile No'];
$headers="From:".$email;
$to="muzeeb.nadaf24@gmail.com";
$msg="Name:-".$name."\n"."Email:-".$email."\n"."Mobile NO:-".$mobile;
mail($to,$subject,$msg,$header);
echo"email has been sent $name";




?>