<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DecaVision Chat App</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
<div id="chat-box" class="wrapper">
    <section class="chat-area">
        <header class="d-flex align-items-center p-3 font-weight-bold">
            <img src="Assets/img/grup.png" alt="" class="rounded-circle mr-3">
            <div class="details">PEMROGRAMAN WEB</div>
        </header>
        <div class="chat-box">
            <?php include 'app/Views/box.php'; ?>
        </div>
        <section class="typing-area p-3 d-flex justify-content-between">
            <input type="text" placeholder="Type a message here ..." name="pesan" id="pesan-user" class="form-control">
            <button type="submit" onclick="send()" class="btn btn-dark"><i class="fab fa-telegram-plane"></i></button>
        </section>
    </section>
</div>
<script src="Assets/js/chat.js"></script>
<script src="Assets/js/showHide.js"></script>
</body>
</html>
