// <?php


// $receiving_email_address = 'mickeyruni18@gmail.com';

//  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//    include( $php_email_form );
//  } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
//}

// $contact = new PHP_Email_Form;
// $contact->ajax = true;
// 
// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['name'];
//  $contact->from_email = $_POST['email'];
//  $contact->subject = $_POST['subject'];
//
//  
//  $contact->smtp = array(
//    'host' => 'sql6.freesqldatabase.com',
//    'username' => 'sql6584656',
//    'password' => '5yGnyBTddG',
//    'port' => '3306'
//  );
//  
//
//  $contact->add_message( $_POST['name'], 'From');
//  $contact->add_message( $_POST['email'], 'Email');
//  $contact->add_message( $_POST['message'], 'Message', 10);
//
//  echo $contact->send();
//?> 

<?php
// database connection code
 $con = mysqli_connect('sql6.freesqldatabase.com', 'sql6584656', '5yGnyBTddG','sql6584656');

// $con = mysqli_connect('localhost', 'root', '','db_contact');
//name	email	subject
// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['subject'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `receiving_email_address` (`Id`, `fldname`, `fldemail`, `fldPhone`, `fldmessage`) VALUES ('0', '$name', '$email', '$subject', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
