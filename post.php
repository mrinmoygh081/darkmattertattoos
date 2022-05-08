<?php
if(isset($_POST['send'])){
    echo $name_banner = $_POST['name'];
    $email_banner = $_POST['email'];
    $sub_banner = $_POST['subject'];
    $message_banner = $_POST['message'];
    
    $to = "somnathpoddar615@gmail.com";
    $subject = "My subject";
    
    $headers = "From: moumoighosh@gmail.com";
    
    mail($to,$subject,$message_banner,$headers);
    header("Location: mail.html");
}

// session_start();
// ob_start();
// if(isset($_SERVER['HTTP_REFERER'])){
//     echo $reffer = $_SERVER['HTTP_REFERER'];
// }
// $db['DB_HOST'] = "localhost:3307";
// $db['DB_USER'] = "root";
// $db['DB_PASS'] ="";
// $db['DB_NAME'] ="college";

// foreach($db as $key => $value){
//     define (strtoupper ($key), $value);
// }

// $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// if(!$connection){
// 	echo "not connect";
// }
// $query = "SET NAMES utf8";
// mysqli_query($connection,$query);

// if(isset($_POST['send_request'])){
//     $name_banner = $_POST['name_banner'];
//     $email_banner = $_POST['email_banner'];
//     $sub_banner = $_POST['sub_banner'];
//     $message_banner = $_POST['message_banner'];
//   $query = "INSERT INTO contact_us(name_banner, email_banner, sub_banner, message_banner) ";        
//         $query .= "VALUES('{$name_banner}', '{$email_banner}', '{$sub_banner}', '{$message_banner}')";
        
//         $contact_us_query = mysqli_query($connection, $query);
//         if(!$contact_us_query) {
//             die("QUERY FAILED " . mysqli_error($connection));
//         } else {
//           header("Location: $reffer");
//         }
// }

?>