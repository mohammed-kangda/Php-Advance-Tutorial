<!-- 

    mail(to,subject,message,headers) -> used to send emails

    to = receiver email
    subject = email subject
    message = email content
    headers = sender email
    headers -> opt 1. CC = means to send email copy to another pers. also
               opt 2. BCC =  means to send same email to another email id

    if we want to use CC or BCC then we have to make header an array           
-->

<?php 
    
    // sending simple email

    $to = "khadijakangda36079@gmail.com";
    $subject = "Email With Php";
    $message = "Sending Email Using PHP";
    // $from = "kangdamohammed551@gmail.com";

    # version -> means type of content in email
    # type -> for html html/ , for vid or attch file  diff?/, for eng lang -> charset=utf-8
    # means in which format we are sending email data(version)

    $headers =  [
                   "MIME-Version:1.0",  
                   "Content-type: text/plain; charset=utf-8", 
                   "From : kangdamohammed551@gmail.com",
                   "CC : newperson@gmail.com",    # another person email
                   "BCC : abc@gmail.com"
                ];

    // converting an array into string -> mail func doesn't allowed array
    $headers = implode("\r\n",$headers);
    # MIME-Version:1.0 Content-type: text/plain; charset=utf-8 From : kangdamohammed551@gmail.com CC : newperson@gmail.com BCC : abc@gmail.com
    

    if(mail($to,$subject,$message,$headers)){
        echo "Email Sent SuccessFully";
    }else{
        echo "Fail To Send email";
    }
    
?>