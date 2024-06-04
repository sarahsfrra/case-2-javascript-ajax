<?php
session_start();
$currentUser = $_SESSION["username"];
foreach ($chats as $chat) :
    $isCurrentUser = $chat['username'] === $currentUser;
?>
    <div class="chat <?= $isCurrentUser ? 'outgoing' : 'incoming' ?>">

        <?php if (!$isCurrentUser) : ?>
            <img src="Assets/img/user1.png" alt="Profile Image">
        <?php endif; ?>
        <?php if ($isCurrentUser) : ?>
            <img src="Assets/img/user2.png" alt="Profile Image">
        <?php endif; ?>
        <div class="username"><?= htmlspecialchars($chat['username']) ?></div>


        <div class="details">
            <p>
                <?= htmlspecialchars($chat['message']) ?><br>
                <small style="font-size: 12px; color: #777;">
                    <?= htmlspecialchars($chat['created_at']) ?></small>
            </p>
        </div>
    </div>
<?php endforeach ?>