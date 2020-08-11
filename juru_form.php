<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$name = $_POST['name'];
		$name = filter_var($name, FILTER_SANITIZE_STRING);

		$company = $_POST['company'];
		$company = filter_var($company, FILTER_SANITIZE_STRING);

		$phone = $_POST['phone'];

		$email = $_POST['email'];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		$content = "
						Name: $name
						Company: $company
						Phone: $phone
						Email: $email
					";



		$smtpUsername = 'juruwebenq@gmail.com';
		$smtpPassword = 'juru$Pass88';
		$emailTo = 'goradiapratham@gmail.com';
		$emailFrom = 'juruwebenq@gmail.com';
		/*
		$mail = new PHPMailer;
		$mail->isSMTP(); 
		$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
		$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
		$mail->Port = 587; // TLS only
		$mail->SMTPSecure = 'tls'; // ssl is depracated
		$mail->SMTPAuth = true;
		$mail->Username = $smtpUsername;
		$mail->Password = $smtpPassword;
		$mail->setFrom($emailFrom);
		$mail->addAddress($emailTo);
		#$mail->addAddress('info@lessismore.best');
		#$mail->addAddress('webmaster@thejuru.com');
		$mail->Subject = 'JURU Website Enquiry';
		$mail->isHTML(false);
		$mail->Body = $content;
		//$mail->msgHTML($content); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
		// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
		*/
		
		if(true)//($mail->send())
		{
		    echo "yeet";
		}
		else
		{
		    echo "oof";
		}
	}
	else
	{
?>
<div class = 'popup-form-title'>Get your FREE TRIAL</div>
<div style = 'font-size: 14px'>Simply provide the details below and our team will contact you soon.</div>
<div class = "hrline-form" style = 'margin: 10px 0 0 0'></div>
<form action = '#' target = '_self' method = 'post' class = 'popup-form'>
	<label for = 'name' style = 'margin-top: 10px' class = 'popup-label'>Name*</label><br>
	<input type = 'text' id = 'pp-name' name = 'name' class = 'popup-form-input' required>
	<label for = 'company' class = 'popup-label'>Company*</label><br>
	<input type = 'text' id = 'pp-company' name = 'company' class = 'popup-form-input' required>
	<label for = 'phone' class = 'popup-label'>Phone*</label><br>
	<input type = 'tel' id = 'pp-phone' name = 'phone' class = 'popup-form-input' required>
	<label for = 'email' class = 'popup-label'>Email*</label><br>
	<input type = 'email' id = 'pp-email' name = 'email' class = 'popup-form-input' required>
	<button type = 'submit' name = 'submit' class = 'popup-form-submit'>Submit</button>
	<button type='button' name = 'cancel' id = 'popup-form-cancel' class = 'popup-form-toggle'>Cancel</button>
</form>
<div class = 'popup-result'>
	<div class = "hrline-form"></div>
</div>

<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script>
	jQuery.validator.addMethod("lettersonly", function(value, element)
	{
    	return /^[a-z\s]+$/i.test(value);
	}, "Only alphabetical characters");

	jQuery.validator.addMethod("phone", function(value, element)
	{
    	return /(?:\(?\+\d{2}\)?\s*)?\d+(?:[ -]*\d+)*$/.test(value);
	}, "Only alphabetical characters");


	$(".popup-form").validate({
		errorClass: "input-error",
		highlight: function (element, errorClass, validClass) {
            $(element).removeClass(errorClass);
            $(element).addClass('highlight-input-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('highlight-input-error');
        },
		submitHandler: function(){
  			ajaxSubmit();
		},    
		rules: {
			name: {
				required: true,
				minlength: 2,
				maxlength: 30,
				lettersonly: true
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				phone: true,
				maxlength: 20,
			},
			company: {
				required: true,
				maxlength: 40
			}
		},
		messages: {
			name: "Please enter a valid name.",
			email: "Please enter a valid email.",
			phone: "Please enter a valid phone number.",
			company: "Please enter a valid company name."
		}
	});

	function ajaxSubmit(){
		$.post
		(
			"juru_form.php",
			{
				name: $("#pp-name").val(),
				company: $("#pp-company").val(),
				phone: $("#pp-phone").val(),
				email: $("#pp-email").val()				
			},
			function(feedback)
			{
				console.log(feedback);
				if(feedback == "yeet")
				{
					$(".popup-form").hide();
					$(".popup-result").show();
					$(".popup-result").text("Thank you for your interest in JURU! Your trial request has been submitted and our team will contact you soon.");
				}
				else
				{
					$(".popup-form").hide();
					$(".popup-result").show();
					$(".popup-result").text("There was a problem while submitting your form. Please try again after some time.");
				}
				
			}
		);
	}
</script>
<?php } ?>