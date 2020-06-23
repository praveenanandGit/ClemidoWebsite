<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Mobile no
if (empty($_POST["number"])) {
    $errorMSG .= "Mobile Number is required ";
} else {
    $number = $_POST["number"];
}



// // MSG Guest
// if (empty($_POST["guest"])) {
//     $errorMSG .= "Subject is required ";
// } else {
//     $guest = $_POST["guest"];
// }


// // MSG Event
// if (empty($_POST["event"])) {
//     $errorMSG .= "Subject is required ";
// } else {
//     $event = $_POST["event"];
// }


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "ask@clemidohealthcare.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "number: ";
$Body .= $number;
$Body .= "\n";
// $Body .= "event: ";
// $Body .= $event;
// $Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>