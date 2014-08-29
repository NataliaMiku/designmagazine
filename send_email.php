<?php 
    /*//if(isset($_POST['submit'])){
    if($_POST['submitEmail'] == "submit"){
        $to = "natalie.miku@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['name'];
        //$last_name = $_POST['last_name'];
        $subject = "Designmagazine - Form submission";
        //$subject2 = "Copy of Designmagazine Form submission";
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        //$headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        // You can also use 
          header('Location: index.html'); 
          //to redirect to another page.
        // You cannot use header and echo together. It's one or the other.
    }else{
      echo "Error! Please try again.";
      //Wqnm0@68
    }*/


if(isset($_POST['submitEmail'])){
    //$to = "natalie.miku@gmail.com"; // this is your Email address
    $to = "info@designmagazine.co.nz"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    //$last_name = $_POST['last_name'];
    //$subject = "Form submission";
    $subject = "Designmagazine - Form submission";
    //$subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //header('Location: index.html');
    header('Location: http://designmagazine.co.nz/');
    //echo "<p>Mail Sent. Thank you " . $first_name . ", I will be in touch with you very soon.</p>";
    //You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>