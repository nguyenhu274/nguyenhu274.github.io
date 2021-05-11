<?php>
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$yourcomment = $POST['yourcomment'];
$yourphotos = $_POST['yourphotos'];

$email_from = '?';

$email_subject = 'New comment submission';

$email_body = "First name: $firstname\n".
              "Last name: $lastname.\n".
              "Their comment: $yourcomment.\n".
              "Their photos: $yourphotos.\n";

$to = 'nguyenhu274@gmail.com';

$headers = "From $email_from \r\n";

$headers .= "Reply to: ";

mail($to, $email_subject,$email_body, $headers);

header("Location: index.html")

?>
