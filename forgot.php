<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="/LoginFormCSS/forgot.css">
</head>

<body>
    <div class="container">
        <div class="title">Forgot Password</div>
        <div class="content">
            <form action="forgot.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Enter Registered Email ID</span>
                        <input type="email" placeholder="Enter your email" name="email" id="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Create New Password</span>
                        <input type="text" placeholder="Enter your password" name="password" id="password"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            required>
                    </div>

                </div>
                <div class="button">
                    <input type="submit" name="submit" id="submit" value="Change Your Password">
                </div>
            </form>
        </div>
        <?php
        session_start();
        if (isset($_POST['submit'])) {
            extract($_POST);
            include 'conn.php';
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = mysqli_query(
                $conn,
                "SELECT * FROM checkdata where email='$email' "
            );
            $row = mysqli_fetch_array($sql);
            $sql = mysqli_query(
                $conn,
                "SELECT * FROM checkdata where email='$email' "
            );
            if (mysqli_num_rows($sql) > 0) {
                $sql1 = mysqli_query(
                    $conn,
                    "UPDATE checkdata SET password='$password' where  email='$email'"
                );
                if ($sql1) {
                    // echo '<script type ="text/JavaScript">';
                    // echo 'alert("Password Changed Successfully")';
                    // echo '</script>';
                    header("location: passwordchange.php");
                }
            } else {
                echo '<script type ="text/JavaScript">';
                echo 'alert("Invalid Eamil ID")';
                echo '</script>';
            }
        }
        ?>
</body>

</html>