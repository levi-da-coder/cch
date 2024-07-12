<?php
require("config.php");
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
    // you want to allow, and if so:
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}

if (isset($_POST['type']) && $_POST['type'] == 1 && isset($_POST['username'])) {
   echo getProfilePicture();
}

function getProfilePicture() {
    global $mysqli;
    $username = $mysqli->real_escape_string($_POST['username']);
    $profilePicture = $mysqli->query("SELECT user_tumb from boom_users WHERE user_name = '$username'");
    if($profilePicture->num_rows > 0){
		return json_encode($profilePicture->fetch_assoc());
    } else {
        return 0;
    }
}

?>