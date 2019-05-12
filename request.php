<?php

require_once('../web/wcf/global.php');

use wcf\data\user\User;

// Empty username = 0
// Empty Password = 1
// User not found = 3
// Password wrong = 4
// All right      = 5


// Check if variables (u = username | p = password) has been set.
if (empty($_POST['u'])) {
    echo 0;
    die();
} elseif (empty($_POST['p'])) {
    echo 1;
    die();
}

// Check if entered username exists.
if (User::getUserByUsername($_POST['u']) != $_POST['u']) {
    echo 3;
    die();
}

// Check if entered password matches to the entered username.
checkPassword($_POST['u'], $_POST['p']);
function checkPassword($username, $password)
{
    if (!User::getUserByUsername($username)->checkPassword($password)) {
        echo 4;
        die();
    } else {
        echo 5;
        die();
    }

}

?>
