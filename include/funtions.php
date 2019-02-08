<?php

function sec_session_start() {
    $session_name = 'kinginivilla';   // Set a custom session name 
    $secure = 'SECURE';
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}


function login($username, $password, $mysqli) {
    if ($stmt = $mysqli->prepare("SELECT username, password
        FROM login
       WHERE username = ?
        LIMIT 1")) {
                            $stmt->bind_param('s', $username);  // Bind "$username" to parameter.
                            $stmt->execute();    // Execute the prepared query.
                            $stmt->store_result();
                    
                            // get variables from result.
                            $stmt->bind_result($username, $db_password);
                            $stmt->fetch();
                    
                            if ($stmt->num_rows > 0) {
                                    // Check if the password in the database matches
                                    // the password the user submitted. We are using
                                    // the password_verify function to avoid timing attacks.
                                    if ($db_password == $password) {
                                        return true;
                                    }                                                                    
                            } 
                            else {
                                // No user exists.
                                return false;
                            }
                    }
}
?>