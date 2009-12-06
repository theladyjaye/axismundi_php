<?php
require '../../axismundi/forms/AMForm.php';

if(count($_POST))
{
	$context = array(AMForm::kDataKey => $_POST);
	$form    = AMForm::formWithContext($context);
	$name    = $form->name;
	$email   = $form->email;
	
	echo <<<OUT
	<strong>You Submitted:</strong><br>
	Name:  $name<br>
	Email: $email
	<hr>
OUT;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Simple Form</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Adam Venturella">
	<!-- Date: 2009-12-06 -->
</head>
<body>
<form action="simple_form.php" method="post" accept-charset="utf-8">
	<label for="name">Name</label><input type="text" name="name" value="" id="name"><br>
	<label for="email">Email</label><input type="text" name="email" value="" id="email">
	<p><input type="submit" value="Continue &rarr;"></p>
</form>
</body>
</html>
