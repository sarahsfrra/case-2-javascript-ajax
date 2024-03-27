<?php
$chats = [];

$file = fopen("data/chat.txt", "r");

while(!feof($file)) {
    $line = fgets($file);
    if(strlen($line) === 0) continue;
    $detail = explode(";", $line);
    $chats[] = $detail;
}

fclose($file);
?>

<?php foreach($chats as $chat) : ?>
    <div class="chat incoming">
        <img src="Assets/img/user2.png" alt="Profile Image">
        <div class="details">
            <p><span><?=$chat[0] ?></span><br><?= $chat[1] ?><br><small style="font-size: 12px; color: #777;"><?= $chat[2] ?></small></p>
        </div>
    </div>
<?php endforeach ?>

