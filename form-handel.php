<?php
    if(isset($_POST['submit'])){
        $mailto = "raj.lohar.1020@gmail.com1";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $subject = "Your Message  Submitted Successfully | Raj Lohar";
        $subject1 = "Client Name :". $name. " wrote the following message". "\n\n". $_POST['message'];
        $message2 = "Dear". $name. "\n\n". "Thank You for contacting me ! I will get back to you shortly";
        $header = "From : ". $from;
        $header2 = "From: ". $mailto;
        $result = mail($mailto, $phone, $message, $header);
        $result2 = mail($from, $subject, $header2);
        if($result){
            echo '<script type="text/javascript">alert("Message was sent successfully!!!!")</script>';

        }else{
            echo '<script type="text/javascript">alert("Message was not sent successfully")</script>'; 
        }


    }
?>