<?php



$db = mysqli_connect("localhost", "root", "123456789", "register");

if($db)
print("connected<br>");
else
print("not connecred<br>");
 

$Firstname=$_POST["first_name"];
$Lastname=$_POST["last_name"];
$Email=$_POST["email"];
$password=$_POST["password"];
$tel=$_POST["phone_number"];
$username=$_POST["username"];
$Address=$_POST["address"];

$q="insert into users values ('$Firstname','$Lastname','$Email','$password','$tel','$username','$Address')";
if(mysqli_query($db,$q))
echo "register success! welcome ".$_POST["username"];
else
echo " register failed ";

mysqli_close($db);

















?>