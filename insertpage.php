
<?php
include "conn.php";


$username=mysqli_real_escape_string($conn,$_POST['username']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$select = "select username from checkdata where username = ? limit 1" ;

$insert="insert into checkdata(username,email,password) values(?,?,?)";

$stmt=$conn->prepare($select);
$stmt->bind_param("s",$username);
$stmt->execute();
$stmt->bind_result($username);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0)
{
$stmt->close();


$stmt=$conn->prepare($insert);
$stmt->bind_param("sss",$username,$email,$password);
$stmt->execute();
}
?>