<?php

$mail_to = 'msd88@drexel.edu';
$subject = http://'something.com | Contact';

$body_message = 'From: '. $_POST['name'] . "\n";
$body_message .= 'Email: '. $_POST['email'] . "\n";
$body_message .= 'Phone: '. $_POST['phone'] . "\n";
$body_message .= 'Message: '. $_POST['message'] . "\n";

$headers = 'From: '.$_POST['contactEmail']."\r\n";
$headers .= 'Reply-To: '.$_POST['contactEmail']."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message. We will contact you shortly.');
window.location = 'index.php';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert('Message failed. Please, send an email to proatservers@gmail.com');
window.location = 'contact.php';
</script>
<?php
}
?>
