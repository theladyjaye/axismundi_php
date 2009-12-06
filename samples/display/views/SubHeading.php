<?php
class SubHeading
{
	private $message;
	private $header;
	public function __construct($message, $header)
	{
		$this->message = $message;
		$this->header  = $header;
	}
	
	public function __toString()
	{
		$data = array();
		$data['message']     = $this->message;
		$data['header']      = $this->header;
		return AMDisplayObject::renderDisplayObjectWithURLAndDictionary('views/subheading.html', $data);
	}
}
?>