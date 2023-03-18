<?php
    $firstName = $_POST['yourname'];
    $phoneNo = $_POST['phonenumber'];
    $email = $_POST['youremail'];
    $subject = $_POST['yourSubject'];
    $message_from = $_POST['message'];


    // Database Connection
    $conn = new mysqli('localhost','root','','kgsales');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into contactform(FirstName, PhoneNo, EmailId, Subject, Message )
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $firstName, $phoneNo, $email, $subject, $message_from);
        $stmt->execute();
        // header("Location:contact.php");
        $stmt->close();
        $conn->close();
    }

    // Rendering to same page 

    if(isset($_REQUEST['submit']))
    {
        header("Location:contact.php");
    }
?>