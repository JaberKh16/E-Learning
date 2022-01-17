
<?php 

	require_once("C:/xampp/htdocs/registration/vendor/autoload.php");
	
	//PHPMailer class imported
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	$mail = new PHPMailer();
	$mail-> isSMTP();
	$mail-> SMTPAuth =true;
	$mail-> Host = "stmp.gmail.com";
	$mail-> Port = "465";
	$mail-> SMTPSecure = "ssl";
	$mail-> Username = "nahianrafi6@gmail.com";
	$mail-> Password = "j@a@b@e@r@161@@jkr@@007@@";
	$mail-> setFrom("nahianrafi6@gmail.com");
	$mail-> addReplyTo("no-reply@nahianrafi.com");
	
	// recipent
	$mail-> addAddress("nahianrafi6@gmail.com");
	$mail-> isHTML();
	$mail-> Subject = "Sending from localhost:3312";
	$mail-> Body = "this is message is from localhost";
	
	if($mail->send())
	{
		echo "email sent";
	}
	
	else
	{
		echo "Sorry something wrong";
	}
	
?>

