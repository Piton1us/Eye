<?php


  session_start();

  $id_film = $_GET['id'];
  $id_user = $_GET['userid'];
  $id_user = $_GET['userid'];
  $f_name = $_GET['f_name']; 
  $email = $_GET['email'];
  $phone = $_GET['phone'];
  $date = $_GET['date'];
  $time = $_GET['time'];
  $row = $_GET['row'];
  $seat = $_GET['seat']; 
  $price = $_GET['price']; 

  $_SESSION['id_film'] = $id_film;
  $_SESSION['id_user'] = $id_user;
  $page =  $_GET['page'];
  
/////////////////////////////////////////////////////////////

   if(isset($_POST['pre'])){

      $page -= 1;
      header("Location: order?id=$id_film&userid=$id_user&page=$page&f_name=$f_name&phone=$phone&email=$email&date=$date&time=$time&row=$row&seat=$seat&price=$price");
   }

/////////////////////////////////////////////////////////////

   if(isset($_POST['next-first'])){

      $page = 2;

      $f_name = $_POST['f_name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];    
      
      header("Location: order?id=$id_film&userid=$id_user&page=$page&f_name=$f_name&phone=$phone&email=$email");
      exit;
      
   }else if(isset($_POST['next-second'])){

      $date = $_POST['date'];
      $time = $_POST['time'];
      
      $page = 3;
     
      header("Location: order?id=$id_film&userid=$id_user&page=$page&f_name=$f_name&phone=$phone&email=$email&date=$date&time=$time");
      exit;

   }else if(isset($_POST['next-third'])){

      $page = 4;

      $row = $_POST['row'];

      $seat = '';

      for($i = 0; $i < 12; $i++){

         if($_POST["seat$i"]){
            $seat = $seat . ",". $_POST["seat$i"];
            $price += 1;
            
         }     
      }
      $price *= 290;
      $seat = trim($seat,",");
     

      header("Location: order?id=$id_film&userid=$id_user&page=$page&f_name=$f_name&phone=$phone&email=$email&date=$date&time=$time&row=$row&seat=$seat&price=$price");
      exit;
     
   }else if(isset($_POST['next-fourth'])){

     print_r($_POST);

     $payment = $_POST['payment'];
     
   }

////////////////////////////////////////////////////////////////
   
  
//Посылаем запрос на добавление с данными из форм.
   require("db.php");
   
   
   
   // $sql = "INSERT INTO `booking` (`user_id`,`f_name`,`phone`,`email`,`film_id`,`data`,`time`,`row`,`seat`,`payment`,`price`) VALUES ('$id_user','$f_name','$phone','$email','$id_film','$date','$time','$row','$seat','$payment','$price')";
   
   //  $result = mysqli_query($connect,$sql);

    



   $sql_film = "SELECT * FROM `film` WHERE id = '$id_film'";

   $film_res = mysqli_query($connect,$sql_film);

   $film = mysqli_fetch_assoc($film_res);

   mysqli_close($connect);

   

//Отправка пользователю пьсьма с данными о сеансе. 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->isSMTP(); 

$mail->SMTPDebug = 4; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.mail.ru"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 465; // TLS only
$mail->SMTPSecure = 'ssl'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = '89169196952@mail.ru';
$mail->Password = 'kBCqbwbRufiZ2Zihk6v4';
$mail->setFrom('89169196952@mail.ru', 'EYE');
$mail->addAddress('lairon.lairon@bk.ru', 'gfhj');
$mail->setLanguage('ru', '/optional/path/to/language/directory/');
$mail->Subject = 'Билет на ' . $film['title'];
$mail->msgHTML('Билет на ' . $film['title'] . "<br>" . "<br>" . "Ряд " . $row . " Место " . $seat . "<br>" . "<br>". "Итого " . $price); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}


?>