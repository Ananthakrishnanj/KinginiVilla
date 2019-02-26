<?php
// include database connection
include('./include/db_connect.php');
include('./include/funtions.php');
sec_session_start();

try {
     
    // get record ID
    // isset() is a PHP function used to verify if a value is there or not
    $id=isset($_GET['id']) ? $_GET['id'] : header("Location: index.php");
 
    // delete query
    $stmt = $conn->prepare("DELETE FROM bookings WHERE bookingid = '".$id."'");

    if($stmt->execute()){
        // redirect to read records page and 
        // tell the user record was deleted
        header('Location: Data.php');
    }else{
        die('Unable to delete record.');
    }
    
}


 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>