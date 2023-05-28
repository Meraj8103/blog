<?php

if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
$email1 = $email;
$email = "";
$name = strlen($name) >1 ? $name:'unperson';
//$email = preg_match("/@.+\..+/", $email) ? $email:'';
$massage = strlen($message) >1 ? $message:'empty massage';
$subject = strlen($subject) >1 ? $subject:'From nick find';

//$content="From: <h1> {$name} </h1> \n Email: {$email1} \n Message: {$message}";
$content="<!DOCTYPE html>
<html lang='en'>
<head>
 <style type='text/css'>
    #main {
        border: 2px solid black;
        background-color:#4caf50;
        text-align: center;
        width:100%;
        height:80vh;
        
    }
    h1 {
        text-transform: uppercase;
          font-family: Cursive;

}
    p {
        
        font-style: italic;
    }
</style>

</head>
<body>
    <div id='main' >
    <h1>  $name </h1>
    <h2>site:blog.birdlights.com</h2>
    <strong> $email1</strong>
    <p> $message </p>
    </div>
</body>
</html>" ;
$recipient = "a@.com";
$mailheader = "From: $email \r\n";
$mailheader .= 'MIME-Version: 1.0'."\r\n" ;
$mailheader .='Content-Type: text/html; Charset=ISO-8859-1'."\r\n";

mail($recipient, $subject, $content, $mailheader) or die("Something worng,please try after some time! Thank you And sorry");
echo "Email sent!";
header('location:https://blog.birdlights.com/contect-us');
?>

