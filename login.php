<?php 
      session_start();
      include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="conten">    
    
    
     <div class="content">
        <div class="header">
            <h2>login</h2>
        </div>
            <form action="login_db.php" method="post">
                <?php if(isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h3>
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name = "username"> 
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name = "password">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-g">
                    <button type="submit" name = "login_user" class = "btn" >Login</button>
                </div>
                <div class="input-a">
                <p>Do you have an account yet? <a href="register.php">Sign Up</a></p>
                </div>
            </form>
    </div>
    
</div>

</body>
</html>