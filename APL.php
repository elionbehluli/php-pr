<?php 
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
 header("location:products.php");
}else{
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aaron Pirate Life</title>
    <link rel="stylesheet" href="Apl-index.css">
</head>
<body>
    <script defer src="skripta.js"></script> 

    <div class="pjesaKryesore">

        <header class="header">
                <img src="Images/logo.png" alt="" id="logo">
        </header>

            <form class="form" action="loginValidate.php" method="post">
            
                <div class="input-group">
                    <div id="errorEmri"></div>
                    <label for="emri">Username:</label>
                    <input id="emri" name="emri" type="text">
                </div>
    
                <div class="input-group">
                    <div id="errorPasswordi"></div>
                    <label for="passwordi">Password:</label>
                    <input id="passwordi" name="passwordi" type="password">
                </div>
                <!-- 

                <div class="input-group">
                    <label for="role">Role:</label>
                    <input name="role" type="text">
                </div>
                -->
                <input id="submit" type="submit" value="Log In" name="Login">Log In</input>
            </form>

            <?php
            include_once 'loginValidate.php';
            ?>
    </div>
    
</body>
</html>

<?php
}
?>