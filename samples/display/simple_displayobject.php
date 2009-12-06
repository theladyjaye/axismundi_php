<?php
require '../../axismundi/display/AMDisplayObject.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DisplayObject Simple</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Adam Venturella">
</head>
<body>
	<?php
	$dictionary = array('message'     =>'Welcome',
	                    'cta_home'    => 'Home',
	                    'cta_about'   => 'About',
	                    'cta_contact' => 'Contact'
	                   );
	echo AMDisplayObject::initWithURLAndDictionary('views/template.html', $dictionary);
	?>
</body>
</html>
