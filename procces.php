<?php 

    if(isset($_POST['hero-btn red-btn']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $sunject = $_POST['sunject'];
       $message= $_POST['message'];

       if(empty($name) || empty($email) || empty($sunject) || empty($message))
       {
           header('location:contact.html?error');
       }
       else
       {
           $to = "ashishdangi380@gmail.com";

           if(mail($to,$sunject,$message,$email))
           {
               header("location:contact.html?success");
           }
       }
    }
    else
    {
        header("location:contact.html");
    }
?>