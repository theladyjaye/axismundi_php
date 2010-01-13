<?php
/**
 *    AxisMundi
 * 
 *    Copyright (C) 2009 Adam Venturella
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
 *    @subpackage display
 *    @author Adam Venturella <aventurella@gmail.com>
 *    @copyright Copyright (C) 2009 Adam Venturella
 *    @license http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 *
 **/
require '../../axismundi/display/AMMustache.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Mustache Template Simple</title>
	<meta name="author" content="Adam Venturella">
	<script src="resources/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="resources/mustache.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		
		$(function () {
            $('#action').bind('click', performAction);
        });
		
		function performAction()
		{
			var template = "<?php AMMustache::template('views/mustacheTemplate.html') ?>";
			
			for(var i = 0; i < 5; i++)
			{
				var data = {   name: "Your Name",
					         status: "Online",
					        message: "lorem ipsum dolor sit amet",
					           date: function()
					                 {
					                      var foo = new Date();
					                      return foo.getTime();
					                 }
					       };
					
				var html = Mustache.to_html(template, data);
				$("#target").append(html);
			}
		}
	</script>
</head>
<body>
	<h3>Add Items to List</h3>
	<div><button id="action">Go</button></div>
	<div id="target">
	</div>
</body>
</html>