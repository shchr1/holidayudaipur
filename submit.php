<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'PHPMailer-master/src/Exception.php';
include 'PHPMailer-master/src/PHPMailer.php';


 
 
      $name=trim($_POST["fname"]);
      

     
      $lastname= trim($_POST["lname"]);
     
    
      $email= trim($_POST["email"]);
   
       
       
        

      $msg1= trim($_POST["message"]);
  
      
    //   $bads = array('SEO','seo','traffic','website','conversion','social media','organic search','search engine','black hat','optimization','marketing','PPC','SMO','Link Building','Web Designing','PHP','Pay Per Click','Content Writing','Website Designing','Internet Consultant','Website Re-Designing','Website Development','spam','Mobile APPS', 'Tags', 'keyword','Structured markup','Website Speed') ;
       
    //   $string = strtolower($comment);


   

      $message = '<html><body>';
        $message .= "<h1 style='font-family:Arial, Helvetica, sans-serif; font-size:14px'>A inquiry has been received from Udaipurholiday:-</h1>";
        $message .= '<table width="350" rules="all" style="border:1px solid #069;font-family:Arial, Helvetica, sans-serif; font-size:12px" cellpadding="10">';
        $message .= "<tr><td width='115' style='background: #ccc;'><strong>First-Name: </strong></td><td>" . $name . "</td></tr>";
        $message .= "<tr><td width='115' style='background: #ccc;'><strong>Last-Name: </strong></td><td>" . $lastname . "</td></tr>";
        // $message .= "<tr><td width='115' style='background: #ccc;'><strong>DOB: </strong></td><td>" . $dob . "</td></tr>";
        $message .= "<tr><td style='background: #ccc;'><strong>E-mail: </strong> </td><td>" . $email . "</td></tr>";
    //   $message .= "<tr><td style='background: #ccc;'><strong>Phone: </strong> </td><td>" . $phone . "</td></tr>";
      $message .= "<tr><td style='background: #ccc;'><strong>Intrusted In: </strong> </td><td>" . $msg1 . "</td></tr>";
      // $message .= "<tr><td style='background: #ccc;'><strong>Current Plan: </strong> </td><td>" . $com . "</td></tr>";
      // $message .= "<tr><td style='background: #ccc;'><strong>Additional details: </strong></td><td>" . $messsage1 . "</td></tr>";
      // $message .= "<tr><td style='background: #ccc;'><strong>Options Selected: </strong></td><td>";  
      //        $i = 0;
    //   foreach($options as $option)
    //   {
    //       $message .= "<p>".++$i.". ".$option."</p></br>";
    //   }
        
        $message .="</td></tr>";
        $message .= "</table>";
        $message .= "<p style='font-family:Arial, Helvetica, sans-serif; font-size:12px'>Regards, <br/>Udaipurholiday </p>";
        $message .= "</body></html>";
        


    //   include 'library/mailer/PHPMailerAutoload.php';
      $mail = new PHPMailer;

      /*$mail->isSMTP();
      * $mail->Host = '';
      * $mail->SMTPAuth = true;
      * $mail->Username = '';
      * $mail->Password = '';
      * $mail->SMTPSecure = ''; //tls or ssl 
      */
      
      $mail->From = 'noreply@udaipurholiday.com';
      $mail->FromName = "Udaipurholiday";
      $mail->addReplyTo($email, $name); 

     
      $mail->addAddress('sharadc71@gmail.com');
       $mail->addAddress('mmansuri95@gmail.com');
      //$mail->addCC('');
     

      $mail->isHTML(true);
      $mail->Subject = "An Inquiry has been recieved from udaipurHoliday";
      $mail->msgHTML($message);
      $mail->Send();
      header('Location:contact.html'); 


?>