<?php 
session_start();

$users = $_SESSION['users'];
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    header("location:APL.php");
}else{
 /*if($_SESSION['role'] != "admin"){
    header("location:products.php");
 }*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h3>Dashboard</h3>
    <h1>SOON....</h1>
    <div class="container my-4">
        <?php if(count($users)): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['surname'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['username'] ?></td>
                    </tr>
                    <?php endforeach;?>
                    <tr method="POST">
                        <td><input type="text" name="iName" placeholder="Name"></td>
                        <td><input type="text" name="iSurname" placeholder="Surname"></td>
                        <td><input type="text" name="iEmail" placeholder="Email"></td>
                        <td><input type="text" name="iUsername" placeholder="Username"></td>
                        <td><input type="text" name="iPassword" placeholder="Password"></td>
                    </tr>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-info">
                You havent defined any User!
            </div>
        <?php endif; ?>
        </div>
</body>
</html>
<?php
}           
            $pdo = $_SESSION['pdo'];
            $sql= "SELECT * FROM `users`";
            $stmt = $pdo->query($sql);
            $sql = "INSERT INTO `users` VALUES (?, ?, ?, ?, ?, 'User')";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute([$_POST["iName"],$_POST["iSurname"],$_POST["iEmail"],$_POST["iUsername"],$_POST["iPassword"]])){
                echo "Insert successfully";
            }else{
                echo "Insert error";
            }
            
?>