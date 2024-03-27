<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: chat.php");
    exit();
}

$pesan = $_POST["pesan"];
$username = $_SESSION["username"];

$file = fopen("data/chat.txt", "a");

$data = "$username;$pesan\n";

fwrite($file, $data);

fclose($file);

header("Location: chat.php");
exit();

?>

