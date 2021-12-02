<?php
//get data from form  
$name = $_POST['nom'];
$email= $_POST['email'];
$tel= $_POST['tel'];
$message= $_POST['message'];
$to = "Contact@stayinmedia.net";
$subject = "email depuis le site web";
$txt ="Nom = ". $name . "\r\n  Email = " . $email . "\r\n Téléphone = ". $tel ."\r\n Message =" . $message;
$headers = "From: noreply@stayinmedia.net" . "\r\n" .
"CC: Contact@stayinmedia.net";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>