<?php

include "../classes/User.php";

$user = new User;

$user->update($_POST,$_FILES); //$

// $FILES holds the info of the image or file such as name and the actual image or file
// $FILES is a 2D Associative Array
// $FILES[''][''];
/*
    $_P0ST['first_name'];
    $_POST['last_name'];
    $_POST['username'];
*/



?>