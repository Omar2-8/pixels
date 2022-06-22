<?php




$mysqli_db = mysqli_connect("localhost", "root", "123456789", "login");

if($mysqli_db)
print("connected<br>");
else
print("not connecred<br>");

$username =$_POST["Username"];
$password =$_POST["Password"];

/*
print($username."<br>");
print($password."<br>");
*/

$query="SELECT id,username,password FROM users where username = '$username' and password = '$password' ";


$result=mysqli_query($mysqli_db,$query);



$row=mysqli_fetch_array($result);


if($row['username'] == $username && $row['password'] == $password){
   echo "Login success! welcome ".$row['username'] ;
} else {
   echo " Login failed ";
}
/*
while ($x=mysqli_fetch_row($result)){
   for($i=0;$i<count($x);$i++){
   print("$x[$i]");
   print("<br>");}
}*/

mysqli_close($mysqli_db);
$usernamesername_err = $password_err = '';

?>