<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = $_POST['project_name'];
    $admin_email = $_POST['admin_email'];
    $form_subject = $_POST['form_subject'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $option = $_POST['option'];
    $message = $_POST['Message'];

    $email_message = "Project Name: $project_name\n";
    $email_message .= "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Option: $option\n";
    $email_message .= "Message: $message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($admin_email, $form_subject, $email_message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
