<!-- php code-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <button type="text"><a href="index.php">s</a></button>
</head>
<body>

<?php
session_start();
include 'conn.php';
include 'insertpage.php';
include 'registration.php';

if (isset($_POST['submit'])) {
    $sql = mysqli_query(
        $conn,
        "SELECT * FROM checkdata where email='$email' and password='$password' "
    );
    $row = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header('Location: landingpage.php');
    } else {
        header('Location: incorrect.php');
    }
}
?>
    
</body>
</html>
