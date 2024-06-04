<?php
require_once 'app/Models/Chat.php';

class ChatController {
    public function showLoginPage() {
        include 'app/Views/login.php';
    }

    public function showChatPage() {
        session_start();
        if (!isset($_SESSION["username"])) {
            header("Location: index.php?action=login");
            exit();
        }
        include 'app/Views/chat.php';
    }

    public function handleLogin() {
        session_start();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $_SESSION["username"] = $username;
            header("Location: index.php?action=chat");
            exit();
        }
    }

    public function handleSendMessage() {
        session_start();
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["username"])) {
            $message = $_POST["pesan"];
            $username = $_SESSION["username"];
            Chat::saveMessage($username, $message);
        }
        header("Location: index.php?action=chat");
        exit();
    }

    public function showChatBox() {
        $chats = Chat::getMessages();
        include 'app/Views/box.php';
    }
}
?>
