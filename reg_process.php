

<?php
   include "connection.php"; 

 $email = $_POST['Email'];
    require 'phpmail/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'subhlabh1001@gmail.com';                 // SMTP username
    $mail->Password = 'Subhash153@';                           // SMTP password
    $mail->setFrom('subhlabh1001@gmail.com', 'Registration Notification');
    $mail->addAddress($email);     // Add a recipient
	$mail->isHTML(true);   
	
    $mail->Subject = 'Registration Notification';

    //$message = '<html><body>';

    $mail->Body .= '<h3 style="color:black;">Thank You For Your Registration with us .</h3>';
	
	$name = $_POST['Name'];
   
	$pass = $_POST['Password']; 
      $conn->query("INSERT INTO `reg`(`Name`, `email`,`pass`) VALUES('$name','$email','$pass')");
		
		
    if ($mail->send()) {
				echo "<script>alert('Data registered!!!!')</script>";
				echo"<script>window.open('register.php','_self')</script>";
 	}
else{
	echo "<script>alert('Email Not Send !!!!')</script>";
				echo"<script>window.open('register.php','_self')</script>";
}



  
        
?>
 
 
