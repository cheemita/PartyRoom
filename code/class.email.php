<?php

    include "class.phpmailer.php";
    include  "class.smtp.php";

    class Email{
        public function __construct(){
            $this->email="everAlex241@gmail.com";
            $this->password="passwordFake";//Poner contraseña
        }

        public function sendEmail($recipient, $title, $subject, $message){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth=true;
            $mail->SMTPSecure="tls";
            $mail->Host="smtp.gmail.com";
            $mail->Port="587";

            $mail-> Username = $this->email;
            $mail-> Password = $this->password;

            $mail->From = $this->email;
            $mail->FromName="Admin";
            $mail->Subject=$subject;
            $mail->WordWrap=50;

            $mail->IsHTML(true);
            $mail->msgHTML($message);
            $mail->AddAddress("$recipient" ,$title);
            $mail->CharSet="UTF-8";

            if(!$mail->send()){
                echo "Error".$mail->ErrorInfo;
            }

            else{
                echo "The mail has been send!";
            }
        }

    }

?>