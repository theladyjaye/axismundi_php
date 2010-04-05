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
 *    @package services
 *    @author Adam Venturella <aventurella@gmail.com>
 *    @copyright Copyright (C) 2010 Adam Venturella
 *    @license http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 *
 **/
abstract class AMServiceContract
{
	public $endpoints;
	
	public function __construct()
	{
		$this->endpoints = array();
	}
	
	abstract public function registerServiceEndpoints();
	
	public function addEndpoint($method, $uri, $action)
	{
		$endpoint = new AMServiceEndpoint($method, $uri, $action);
		$this->endpoints[$endpoint->method][$endpoint->hash] = $endpoint;
		/*
		$paramCount           = 0;
		$key                  = "";
		$queryString          = null;
		$parts                = array();
		$hasParams            = false;
		$queryStringHasParams = false;
		
		
		// get rid of any leading /
		if($uri[0] == '/') $uri = substr($uri, 1);
		
		// do we have any query string params?
		$hasQueryString = strripos($uri, '?');
		
		if($hasQueryString !== false)
		{
			$queryString          = substr($uri, $hasQueryString+1);
			$queryStringHasParams = (strpos($queryString, '{') === false) ? false : true
			$queryString          = explode('&', $queryString);
			$uri                  = substr($uri, 0, $hasQueryString);
		}
		
		// cleanup and prepare:
		// do we end with a / 
		$uri       = (strripos($uri, '/') == (strlen($uri) -1)) ? substr($uri, 0, -1) : $uri;
		$hasParams = (strpos($uri, '{') === false) ? false : true;
		
		$segments  = explode('/', $uri);
		
		// parse the main URI body
		if($hasParams)
		{
			foreach($segments as $segment)
			{
				if(strpos($segment, '{') === false)
				{
					$key    .= $segment;
					$parts[] = $segment;
				}
				else
				{
					$paramCount = $paramCount + 1;
				}
			}
		}
		else
		{
			$parts = $segments;
			$key   = implode("", $segments);
		}
		
		
		// parse the Query String 
		if($queryStringHasParams)
		{
			$queryString = explode('&', $queryString);
		}
		else
		{
			
		}
		
		$hash           = AMServiceManager::generateKey($key, $paramCount);
		
		$object         = new stdClass();
		$object->action = $action;
		$object->parts  = $parts;
		$object->params = $paramCount;
		
		$this->endpoints[strtoupper($method)][$hash] = $object;
		*/
		
	}

}
?>