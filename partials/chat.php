<?php

require_once('connexion.php');

$query = "SELECT * FROM messages";
$request = $db->query($query);
$messages = $request->fetchAll($db::FETCH_ASSOC);

?>


<div id="mainchat">
    <?php foreach ($messages as $message) { 
        $request = $db->prepare('SELECT * FROM users WHERE id_users = :id_users');
        $request->execute([
            ':id_users' => $message['id_users'],
        ]);
        $user = $request->fetch();
        
        ?>
        <div class="chat">
            <div class="user">
                <?php echo $user['userName'] ?>
            </div>
            <div class="date">
                <?php echo $message['dateHour'] ?>
            </div>

            <div class="chatmessage">
                <?php echo $message['content'] ?>
            </div>
        </div>

    <?php } ?>
</div>