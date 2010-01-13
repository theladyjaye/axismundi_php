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

if(count($_POST))
{
	$context        = array(AMForm::kDataKey => $_POST);
	$form           = AMForm::formWithContext($context);
	$name           = $form->name;
	$email          = $form->email;
	$file_name      = $form->avatar->name;
	$file_temp_name = $form->avatar->tmp_name;
	$file_size      = $form->avatar->size;
	
	echo <<<OUT
	<strong>You Submitted:</strong><br>
	Name:  $name<br>
	Email: $email<br>
	File Name: $file_name<br>
	Temp Name: $file_temp_name<br>
	File Size: $file_size
	<hr>
OUT;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>File Form</title>
	<meta name="author" content="Adam Venturella">
	<!-- Date: 2009-12-06 -->
</head>
<body>
<form action="file_form.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<label for="name">Name</label><input type="text" name="name" value="" id="name"><br>
	<label for="email">Email</label><input type="text" name="email" value="" id="email"><br>
	<label for="avatar">Avatar</label><input type="file" name="avatar" value="" id="avatar">
	<p><input type="submit" value="Continue &rarr;"></p>
</form>
</body>
</html>
