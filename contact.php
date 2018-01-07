<?php
$field_email = $_POST['cf_email'];

$mail_to = 'help@aqua.company.com';
$subject = 'Someone signed up for notifs!';


$body_message = 'E-mail: '.$field_email."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thanks for signing up for notifications!');
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an email to help@aqua.company.com');
	</script>
<?php
}
?>
