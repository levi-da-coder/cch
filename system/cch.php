<?php
require("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['type'])) {
        $type = $_POST['type'];

        switch ($type) {
            case 1:
                if (isset($_POST['username'])) {
                    echo getProfilePicture($_POST['username']);
                } else {
                    echo 0; // Handle error or invalid request
                }
                break;
                
            case 2:
                if (isset($_POST['category'], $_POST['name'])) {
                    echo updateRoomCategory($_POST['category'], $_POST['name']);
                } else {
                    echo 0; // Handle error or invalid request
                }
                break;
                
            case 3:
                if (isset($_POST['t'])) {
                    echo inviteToChat($_POST['t']);
                } else {
                    echo 0; // Handle error or invalid request
                }
                break;
                
            case 4:
                if (isset($_POST['r'])) {
                    echo updateTheRoom($_POST['r']);
                } else {
                    echo 0; // Handle error or invalid request
                }
                break;
                
            default:
                echo 9999; // Unknown type
                break;
        }
    } else {
        echo 9999; // No type specified
    }
} else {
    echo 9999; // Not a POST request
}

function getProfilePicture($username) {
    global $mysqli;

    // Prepare statement
    $stmt = $mysqli->prepare("SELECT user_tumb FROM boom_users WHERE user_name = ?");
    
    // Bind parameter
    $stmt->bind_param("s", $username);
    
    // Execute statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        return json_encode($result->fetch_assoc());
    } else {
        return 0;
    }
}

function updateRoomCategory($category, $name) {
    global $mysqli;

    // Prepare statement
    $stmt = $mysqli->prepare("UPDATE boom_rooms SET category = ? WHERE room_name = ?");
    
    // Bind parameters
    $stmt->bind_param("ss", $category, $name);
    
    // Execute statement
    if ($stmt->execute()) {
        return 1;
    } else {
        return 99; // Error occurred
    }
}

function inviteToChat($targetId) {
    global $mysqli, $data;
    // Example function without direct SQL interaction
    // Replace with your actual logic
    $stmt = $mysqli->prepare("SELECT user_roomid FROM boom_users WHERE user_id = ?");
    $stmt->bind_param("i", $targetId);
    $stmt->execute();
    $result = $stmt->get_result();

    if($row = $result->fetch_assoc()) {
        if($row['user_roomid'] == $data['user_roomid']) {
            return 99;
        }
    }
    boomNotify('chat_invite', array('target'=> $targetId, 'custom' => $data['user_name'], 'custom2' => $data['user_roomid'], 'source'=> 'system', 'reason'=> "Invited to chat", 'delay'=> $delay, 'icon'=> 'plike'));
    return 1;
}

function updateTheRoom($roomid) {
    global $mysqli, $data;

    // Example function with prepared statement
    // Prepare statement
    $stmt = $mysqli->prepare("SELECT * FROM boom_rooms WHERE room_id = ?");
    
    // Bind parameter
    $stmt->bind_param("i", $roomid);
    
    // Execute statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Prepare update statement
        $updateStmt = $mysqli->prepare("UPDATE boom_users SET user_roomid = ?, user_move = ?, last_action = ?, room_mute = ?, user_role = ? WHERE user_id = ?");
        $room = myRoomDetails($data['user_roomid']);
        // Example values, replace with actual data
        $user_roomid = $roomid;
        $user_move = time();
        $last_action = time();
        $room_mute = $room['room_muted'];
        $user_role = $room['room_ranking'];
        $user_id = $data['user_id'];
        
        // Bind parameters
        $updateStmt->bind_param("iiiiii", $user_roomid, $user_move, $last_action, $room_mute, $user_role, $user_id);
        
        // Execute update statement
        $updateStmt->execute();
        
        // Perform additional actions if needed
        redisInitUser($data);
        joinRoomMessage($roomid);
        
        return 1;
    } else {
        return 0; // Room not found
    }
}
?>