<?php
$form_name = $_POST['form_name'];
$form_email = $_POST['form_email'];
$form_subject = $_POST['form_subject'];
$form_phone = $_POST['form_phone'];
$form_message = $_POST['form_message'];

if(isset($_POST["SubmitBtn"])){


$to = "info@asifglobal.com, asifshah0504@gmail.com";
$subject = "Asif Global Export";
$from=$_POST["form_email"];

$email_body = "Name: $form_name.\n".
				"Email: $form_email.\n".
				"Subject: $form_subject.\n".
				"Phone No: $form_phone.\n".
				"Message: $form_message.\n";

$headers = "From: $from";

mail($to,$subject,$email_body);
echo "Email successfully sent.";
}
?>


<script>
 {
  location.replace("https://asifglobal.com/")
}
</script>