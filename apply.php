<?php

if (isset($_POST['submit application'])) {
    $stdsurname = $_POST['stdsurname'];
    $stdfirstname = $_POST['stdfirstname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $IDType = $_POST['IDType'];
    $ID = $_POST['ID'];
    $tel = $_POST['tel'];
    $cell = $_POST['cell'];
    $address = $_POST['address'];
    $mailFrom = $_POST['mail'];
    $option1 = $_POST['option1']; 
    $option2 = $_POST['option2']; 
    $option3 = $_POST['option3'];  
    
    /*apply page2*/
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $relation = $_POST['relation'];
    $studentname = $_POST['studentname']; 
    $studentname = $_POST['studentname'];   
    
    /*apply page 3 */
    $studentname = $_POST['studentname'];

    $mailTo = "ravostech@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Received mail from ".$name."\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("location: contact.php?mailsend");

}

?>