<?php
require_once 'app/Controllers/ChatController.php';

$controller = new ChatController();

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

switch ($action) {
    case 'login':
        $controller->showLoginPage();
        break;
    case 'handleLogin':
        $controller->handleLogin();
        break;
    case 'chat':
        $controller->showChatPage();
        break;
    case 'send':
        $controller->handleSendMessage();
        break;
    case 'box':
        $controller->showChatBox();
        break;
    default:
        $controller->showLoginPage();
        break;
}
?>
