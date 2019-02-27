<?php
// include database connection
include('./include/db_connect.php');
include('./include/funtions.php');
sec_session_start();

try {
     
    // get record ID
    // isset() is a PHP function used to verify if a value is there or not
    $id=isset($_GET['id']) ? $_GET['id'] : header("Location: logout.php");
 
    // delete query
    $stmt = $conn->prepare("INSERT INTO bookings( name, bookingdate, checkin, checkout, mobile, email, adults, children, room, roomtype, comments) VALUES ");

    if($stmt->execute()){
        // redirect to read records page and 
        // tell the user record was deleted
        $_SESSION['checkin'] = $_GET['checkin'];
        $_SESSION['checkout'] = $_GET['checkout'];
        header('Location: Data.php');
    }else{
        header("Location: error.php");
    }
    
}


 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>