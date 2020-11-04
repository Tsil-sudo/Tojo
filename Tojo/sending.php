

<?php

file_put_contents("message.txt", "name: " . $_POST['name'] . " message: " . $_POST['message'] . "\n", FILE_APPEND);
header('location: redirection.html');

exit();


	
