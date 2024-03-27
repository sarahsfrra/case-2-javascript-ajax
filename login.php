<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];

    $_SESSION["username"] = $username;

    header("Location: chat.php");
    
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DecaVision Chat App</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
<div class="wrapper">
        <section class="form login">
            <header class="h2">DecaVision Chat App</header>
            <form action="" method="post">
                <!-- <div class="error-txt"></div> -->
                <div class="user-details">
                    <div class="field input form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="field button">
                        <input type="submit" class="btn btn-primary" value="Continue to Chat">
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>
</html>