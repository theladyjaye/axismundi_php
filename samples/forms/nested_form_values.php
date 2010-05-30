<?php
/**
 *    AxisMundi
 * 
 *    Copyright (C) 2010 Adam Venturella
 *
 *    LICENSE:
 *
 *    Licensed under the Apache License, Version 2.0 (the "License"); you may not
 *    use this file except in compliance with the License.  You may obtain a copy
 *    of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 *    This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 *    without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR 
 *    PURPOSE. See the License for the specific language governing permissions and
 *    limitations under the License.
 *
 *    Author: Adam Venturella - aventurella@gmail.com
 *
 *    @package samples
 *    @subpackage forms
 *    @author Adam Venturella <aventurella@gmail.com>
 *    @copyright Copyright (C) 2010 Adam Venturella
 *    @license http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 *
 **/
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
	$form->addValidator(new AMPatternValidator('preferences->chocolate',  AMValidator::kRequired, '/^yes|no$/i', 'Do you like chocolate? Yes or No only'));
	$form->addValidator(new AMPatternValidator('preferences->sardines',  AMValidator::kRequired, '/^yes|no$/i', 'Do you like sardines? Yes or No only'));
	// the length requirements could have also been handeled with the pattern validator: {3,4}
	
	$name           = $form->name;
	$email          = $form->email;
	$pref_chocolate = $form->{'preferences->chocolate'};
	$pref_sardines  = $form->{'preferences->sardines'};
	
	if($form->isValid)
	{
		echo <<<OUT
		<div style="background:#cdffc9; color:#00cc00; height:20px; width:500px; margin-bottom:1px; padding:7px 0 0 5px;">Success!</div>
		<strong>You Submitted:</strong><br>
		Name:  $name<br>
		Email: $email<br>
		Likes Chocolate: $pref_chocolate<br>
		Likes Sardines: $pref_sardines<br>
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
	<title>Validation Form - Nested Form Values</title>
	<meta name="author" content="Adam Venturella">
	<!-- Date: 2009-12-06 -->
</head>
<body>
<form action="nested_form_values.php" method="post" accept-charset="utf-8">
	<label for="name">Name</label><input type="text" name="name" value="" id="name"><br>
	<label for="email">Email</label><input type="text" name="email" value="" id="email"><br>
	<label for="name">Preferences - Likes Chocolate</label><input type="text" name="preferences[chocolate]" value="" id="chocolate"><br>
	<label for="name">Preferences - Likes Sardines</label><input type="text" name="preferences[sardines]" value="" id="sardines"><br>
	<p><input type="submit" value="Continue &rarr;"></p>
</form>
</body>
</html>
