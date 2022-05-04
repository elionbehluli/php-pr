<?php

    $host="localhost";
    $user="root";
    $pw="";
    $db="web-sem3";
    $charset="utf8mb4";
    $opt=[];

    $dns= "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dns, $user, $pw, $opt);
        $_SESSION['pdo'] = $pdo;
    }catch(Exception $e){
        echo $e->getMessage();
    }

    $sql= "SELECT * FROM `users`";
    $stmt = $pdo->query($sql);

    $users=[];
    while($row = $stmt->fetch()){
        $users[] = $row;
    }
    session_start();
    $_SESSION['users'] = $users;
    
    if(isset($_POST['Login'])) {
        $username = $_POST['emri'];
        $password = $_POST['passwordi'];

        /*include_once 'users.php';*/

        $i = 0;

        foreach($users as $user) {
            $i++;
            if($username == $user['username'] && $password == $user['password']) {
                session_start();

                $_SESSION['username'] = $username;
                
                $_SESSION['password'] = $password;

                $_SESSION['role'] = $user['role'];

                header("location:products.php");
                exit();
            } else {
                if($i == sizeof($users)) {
                    echo "Username or Password is incorrect, check for any typo";
                    exit();
                }
            }
        }
    }
?>


