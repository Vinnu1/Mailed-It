<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Arvo:bold" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <meta charset="UTF-8">
    <title>Mailed It!</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<style>
h1
{
font-family:'Arvo', serif;
color:white;
}

body
{
font-family:'Arvo', serif;
background-color:#C63D0F;
text-align:center;
font-size:20px;
}
textarea
{
	resize:none;
}
.heading
{
width: 100%;
padding-top: 20px;
padding-bottom: 20px;
text-align:center;
background-color:#333333;
}
td{ 
font-family:'Arvo', serif;
    text-align:right;
}
table
{ 
top:0px;
margin-left: auto;
margin-right: auto;
}
.button 
	{
	background-color: #333333;
    color: white;
    border: 2px solid #333333;
	-webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-style:normal;
	font-family:'Arvo', serif;
	}
.button:hover 
	{
	background-color: #FFFFFF;
    color: black;
	border: 2px solid #505050;
    
	}
input[type=file]
{
	font-style:normal;
}
input
{
color: #333333;
font-family: ‘Arial Narrow’, sans-serif;
font-style:italic;
}
::-webkit-input-placeholder { 
    font-family:'Arvo', serif;
	font-style:normal;
}
textarea
{
	font-family: ‘Arial Narrow’, sans-serif;
font-style:italic;
}
a 
{
	text-decoration:none;
}
.foot
{
width: 100%;
text-align:center; 
background-color:white;
position: absolute;
bottom:0;
padding-bottom:1px;
}
</style>
<div class="heading">
<h1> Mailed It! </h1>
</div>
<br>
<br>
<body>
<?php
if(isset($_POST['submit']))
{
require $_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               

$mail->isSMTP();    
switch($_POST['es'])
{
	case 'yahoo':                           
				$mail->Host = 'smtp.mail.yahoo.com';  
				$mail->Port = 465;
				$mail->SMTPSecure = 'ssl'; 
				break;
	case 'gmail':                                  
				$mail->Host = 'smtp.gmail.com';  
				$mail->Port = 465;
				$mail->SMTPSecure = 'ssl'; 
				break;
	case 'outlook':                               
				$mail->Host = 'smtp.live.com';  
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls'; 
				break;
}
$mail->SMTPAuth = true;                         
$mail->Username = $_POST['e'];              
$mail->Password = $_POST['p'];                  
$mail->setFrom($_POST['e'], $_POST['n']);
$mail->addAddress($_POST['re'], '');
$mail->addCC($_POST['cc']);
$mail->addBCC($_POST['bcc']);
$mail->addAttachment($_FILES["photo"]["tmp_name"],$_FILES["photo"]["name"] );      
$mail->isHTML(true);                             

$mail->Subject = $_POST['sub'];
$mail->Body    = $_POST['body'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	echo "<span style='color: black;'>"."Message could not be sent.<br>"."</span>";
    echo "<span style='color: black;'>"."Error:"."Insert all required credentials correctly."."</span>";
	
} else {
	echo "<span style='color:blue;'>"."Message has been sent."."</span>";
	
}
}
?>
<div class="foot" style="font-size:15px;">
Contact Vinayak &nbsp <a style="color:#505050" href="https://www.linkedin.com/in/vinayak-sinha-743125110/" title="Linkedin" target=_blank> <img border="0" alt="Linkedin" src="linkedin.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/Vinnu1" title="GitHub" target=_blank> <img border="0" alt="GitHub" src="g.png" width="20px" height="20px"></a>
</div>
</body>
</html>
