<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // // Clear session array
    // $_SESSION = array();

    // // If cookies are used for session, invalidate the cookie
    // if (ini_get("session.use_cookies")) {
    //     $params = session_get_cookie_params();
    //     setcookie(session_name(), '', time() - 42000,
    //         $params['path'], $params['domain'],
    //         $params['secure'], $params['httponly']
    //     );
    // }

    session_unset();
    session_destroy();

    // Redirect to login page
    header('Location: login.php');
    exit();
} else {
    // Disallow GET requests for logout - send user back to home
    header('Location: home.php');
    exit();
}

?>