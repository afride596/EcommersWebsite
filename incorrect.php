<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats | Login</title>
    <link rel="stylesheet" href="./LoginFormCSS/index.css">
    <link rel="shortcut icon" href="./Photos/beatsLogo.png" type="image/x-icon">

</head>

<body>

    <h1 class="heading"> Hey There ,Welcome!👋</h1>
    <div class="main">
        <input type="checkbox" name="" id="chk" aria-hidden="true">

        <!-- login -->
        <!-- ignore div class  -->
        <div class="signup">
            <form action="validationpage.php" method="post">

                <label for="chk" aria-hidden="true">Login</label>
                <h3>Incorrect Email or Password</h3>
                <input type="email" name="email" placeholder="Email" required="" id="">
                <input type="password" name="password" placeholder="password" required="" id="">
                <button name="submit">Login</button>
                <a href="forgot.php">Forgot Password ?</a>

            </form>

     
        </div>

        <!-- signup -->
         <!-- ignore div class  -->
        
        <div class="login">
            <form action="registration.php" method="post">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="username" placeholder="User name" required="" id="">
                <input type="email" name="email" placeholder="Email" required="" id="">
                <input type="password" name="password" placeholder="Password" required="" id="">
                <button>Sign up</button>
            </form>
            
        </div>
        
    </div>


</body>

</html>