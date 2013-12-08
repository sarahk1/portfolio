<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail_to = 'sarah.kay2425@gmail.com'
$subject = $_POST['subject'];

$body_message = 'From: '.$name."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'Message: '.$message;

$mailheader = 'From: $email \r\n';

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'contact_page.html';
	</script>
<?php
}
