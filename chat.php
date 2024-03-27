<?php

session_start();

if ( !isset($_SESSION["username"])) {
    header("Location: login.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <style>
        #chat-toogle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }
        #chat-box.open {
            transform: translateX(0);
        }
    </style>
</head>

<body>
<div id="chat-toogle">
   <button class="btn btn-dark btn-round" onclick="toggleChat()"><i class="fas fa-envelope"></i></button>
</div> 
   <div id="chat-box" class="wrapper" >
        <section class="chat-area">
            <header class="d-flex align-items-center p-3 font-weight-bold">
                <img src="Assets/img/grup.png" alt="" class="rounded-circle mr-3">
                <div class="details">PEMROGRAMAN WEB</div>
            </header>
            <div class="chat-box">
                <?php include 'box.php'; ?>
            </div>
            <section class="typing-area p-3 d-flex justify-content-between">
                <input type="text" placeholder="Type a message here ..." name="pesan" id="pesan-user" class="form-control">
                <button type="submit" onclick="send()" class="btn btn-dark"><i class="fab fa-telegram-plane"></i></button>
            </section>
        </section>
    </div>
    <script>
          $(document).ready(function(){
        $('#chatArea').scrollTop($('#chatArea')[0].scrollHeight);
    });
    </script>
    <script src="Assets/js/chat.js"></script>
    <script src="Assets/js/showHide.js"></script>
</body>
</html>