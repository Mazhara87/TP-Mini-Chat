<?php

require_once('../connexion.php');

// var_dump($_POST);

if(
    isset($_POST['message']) && !empty($_POST['message'])
    &&  isset($_POST['id_users']) && !empty($_POST['id_users'])
){
    $dateHour = date('Y-m-d H:i:s');
    // echo $dateHour;
    $data = [
        ':message' => $_POST['message'],
        ':dateHour' => $dateHour,
        ':id_users' => $_POST['id_users'],
    ];
    $sql = "INSERT INTO messages (content, dateHour, id_users) VALUES (:message, :dateHour, :id_users)";
    $request= $db->prepare($sql);
    $request->execute($data);
}
header('Location: ../index.php');


?>