<?php
$hide = "";
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    header("location:APL.php");
} else {
    if($_SESSION['role'] == "Admin") {
        $hide = "";
    } else {
        $hide = "hide";
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In Page</title>
        <style>
            body {
                background-color: black;
            }
            .hide {
                display: none;
            }

            .link-1 {
                position: center;
            }

            .link-2 {
                position: center;
            }

            .link-3 {
                position: center;
            }
        </style>
    </head>
    <body>
        <div class="link-1">
            <a href="https://www.youtube.com/watch?v=m4EMbSQwRTY"><h3> How to make a KILLER After Effects INTRO for your videos! (Easy!!) </h3> </a>
        </div>
        <hr>    
        <div class="link-2">
            <a href="https://www.youtube.com/watch?v=7VUBg6f4G4E"><h3> Making Coffee with an Egg & it's SHELL! #Shorts </h3></a>
        </div>
        <hr>
        <div class="link-3">
        <a href="https://www.youtube.com/watch?v=VaxRdm-xu7I"><h3> The Canon R5C has 1 Major Flaw (ALMOST perfect camera??) </h3></a>
        </div>
        <hr>
        <a href="logout.php">Log out</a>
            <a href="dashboard.php" class="<?php echo $hide ?>">Dashboard</a>
        <?php 
            echo "Username: ".$_SESSION['username'];
        ?>
    </body>
    </html>

    <?php
        }
    ?>