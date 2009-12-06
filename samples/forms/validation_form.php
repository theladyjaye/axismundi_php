<?php
require '../../axismundi/forms/AMForm.php';
require '../../axismundi/forms/validators/AMEmailValidator.php';
require '../../axismundi/forms/validators/AMInputValidator.php';
require '../../axismundi/forms/validators/AMPatternValidator.php';

if(count($_POST))
{
	$context = array(AMForm::kDataKey => $_POST);
	$form    = AMForm::formWithContext($context);
	
	$form->addValidator(new AMEmailValidator  ('email', AMValidator::kRequired, 'Invalid Email Address'));
	$form->addValidator(new AMInputValidator  ('name',  AMValidator::kRequired, 3, 4, 'Name must be between 3-4 charcaters long'));
	$form->addValidator(new AMPatternValidator('name',  AMValidator::kRequired, '/^\w+$/', 'Name Can only contain word characters'));
	// the length requirements could have also been handeled with the pattern validator: {3,4}
	
	$name    = $form->name;
	$email   = $form->email;
	
	if($form->isValid)
	{
		echo <<<OUT
		<div style="background:#cdffc9; color:#00cc00; height:20px; width:500px; margin-bottom:1px; padding:7px 0 0 5px;">Success!</div>
		<strong>You Submitted:</strong><br>
		Name:  $name<br>
		Email: $email
		<hr>
OUT;
	}
	else
	{
		foreach($form->validators as $validator)
		{
			if($validator->isValid == false)
			{
				echo "<div style='background:#ff9898; color:#cc0000; height:20px; width:500px; margin-bottom:1px; padding:7px 0 0 5px;'>".$validator->message."</div>\n";
			}
		}
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Validation Form</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Adam Venturella">
	<!-- Date: 2009-12-06 -->
</head>
<body>
<form action="validation_form.php" method="post" accept-charset="utf-8">
	<label for="name">Name</label><input type="text" name="name" value="" id="name"><br>
	<label for="email">Email</label><input type="text" name="email" value="" id="email">
	<p><input type="submit" value="Continue &rarr;"></p>
</form>
</body>
</html>
