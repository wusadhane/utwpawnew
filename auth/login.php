<?php
session_start();

if (!isset($_POST['submitted']))
    header('Location: ' . $_SERVER['HTTP_REFERER']);

$user1 = [
    'username' => 'admin',
    'password' => 'admin'
];

$user2 = [
    'username' => 'tamu',
    'password' => 'tamu'
];


// if ($credentials['username'] !== $_POST['username'] or $credentials['password'] !== $_POST['password']) {
//     header('Location: ' . $_SERVER['HTTP_REFERER']);
//     exit();
// }

if ($_POST['username'] == $user1['username']) {
    if ($_POST['username'] == $user1['username'] and $_POST['password'] == $user1['password']) {
        $_SESSION['isLogged'] = "1";
        $_SESSION['username'] = $_POST['username'];
        header('Location:' . '../home.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
} elseif ($_POST['username'] == $user2['username']) {
    if ($_POST['username'] == $user2['username'] and $_POST['password'] == $user2['password']) {
        $_SESSION['isLogged'] = "1";
        $_SESSION['username'] = $_POST['username'];
        header('Location:' . '../home.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}

exit();
