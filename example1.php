<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="txt/css" href="../stylesheet/new2.css"> 
    <title>Document</title>
</head>
<body>
<form name="myform" action="new2.php"  method="POST">
       
<table>
        <tr> <td>Name</td><td><input type="text" name="Name" value=""></td></tr> 
       
       <tr><td>Email</td><td><input type="email" name="email" value=""></td></tr>
       <tr> <td>Name</td><td><input type="text" name="phone" value=""></td></tr> 
       
       <tr><td>Email</td><td><input type="email" name="message" value=""></td></tr>
       
       
       
       
       <tr><td><input type="submit" name="submit" value="Save datas"></td></tr>



       </table>

</form>

<?php
require 'config.php';

if(isset($_POST['submit']))
{
$Name=$_POST['Name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
if($Name!= "" && $email!="")
{
if($message!="" && $phone!="")
{
$sql="INSERT INTO supportservice(username,useremail,phone,comments) values('$Name','$email','$phone','$message')";
if($conn->query($sql))
{
   echo "data stored";
}
else
{
   echo "insert data".$conn->error;

}
}
else
{
 echo "all fields requuired";
}
} 
else
{
echo "all fields required";
}
}
else
{
echo "please enter all data";
}
?>

</body>
</html>