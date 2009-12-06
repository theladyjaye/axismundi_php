<?php
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