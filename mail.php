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
.foot
{
width: 100%;
text-align:center; 
background-color:white;
padding-bottom:1px;
bottom:0;
position:fixed;
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
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    font-family:'Arvo', serif;
	font-style:normal;
}
textarea
{
font-family: ‘Arial Narrow’, sans-serif;
font-style:italic;
}
a {
	text-decoration:none;
}
</style>
<body>
<div class="heading">
<h1> Mailed It! </a></h1>
</div>
<h3 style="color:white; text-align:center;">Send mails directly from here if you have Gmail, Yahoo or Outlook.<br>
Note: For Gmail, first turn on 'access for less secure apps' in your account settings.</h3>
<br>
<br>
    <form action="mailresult.php" method="post" enctype="multipart/form-data">
		<table>
		<tr><td>Email Service:</td><td style="text-align:left;"><select name="es">
			<option value="gmail"> Gmail </option>
			<option value="outlook"> Outlook </option>
			<option value="yahoo"> Yahoo </option>
			</select></td></tr>
		<tr><td>Name:</td><td style="text-align:left;"><input type="text" name="n" placeholder="(Optional)"</td></tr>
		<tr><td>Email:</td><td style="text-align:left;"><input type="email" name="e" ></td></tr>
        <tr><td>Password:</td><td style="text-align:left;"><input type="password" name="p"></td></tr>
        <tr><td>Receiver's Email:</td><td style="text-align:left;"><input type="email" name="re"></td></tr>
		<tr><td>CC:</td><td style="text-align:left;"><input type="email" name="cc" placeholder="(Optional)"></td></tr>
		<tr><td>BCC:</td><td style="text-align:left;"><input type="email" name="bcc" placeholder="(Optional)"></td></tr>
		<tr><td>Subject:</td><td style="text-align:left;"><input type="text" name="sub"></td></tr>
		<tr><td></td><td style="text-align:left;"><textarea rows=10 cols=40 name="body"></textarea></td></tr>
		<tr><td>Attachment:</td><td style="text-align:left;"></label><input type="file" name="photo" id="fileSelect"></td></tr>
        <tr><td></td><td style="text-align:left;"><br><br><input type="submit" name="submit" value="Send" class="button"></td></tr>
		</table>
	</form>
</body>
<br>
<div class="foot" style="font-size:15px;">
Contact Vinayak &nbsp <a style="color:#505050" href="https://www.linkedin.com/in/vinayak-sinha-743125110/" title="Linkedin" target=_blank> <img border="0" alt="Linkedin" src="linkedin.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/Vinnu1" title="GitHub" target=_blank> <img border="0" alt="GitHub" src="g.png" width="20px" height="20px"></a>
</div>
</html>
