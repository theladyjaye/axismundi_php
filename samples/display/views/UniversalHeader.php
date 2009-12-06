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
class UniversalHeader
{
	private $message;
	public function __construct($message)
	{
		$this->message = $message;
	}
	
	public function __toString()
	{
		$data = array();
		$data['cta_home']    = 'Home';
		$data['cta_about']   = 'About';
		$data['cta_contact'] = 'Contact';
		$data['message']     = $this->message;

		return AMDisplayObject::renderDisplayObjectWithURLAndDictionary('views/template.html', $data);
	}
}
?>