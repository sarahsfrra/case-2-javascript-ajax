<?php
require_once 'config.php';

class Chat {
    public static function saveMessage($username, $message) {
        $conn = connect();
        $stmt = $conn->prepare("INSERT INTO chats (username, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $message);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public static function getMessages() {
        $conn = connect();
        $result = $conn->query("SELECT * FROM chats ORDER BY created_at ASC");
        $chats = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
        return $chats;
    }
}
?>
