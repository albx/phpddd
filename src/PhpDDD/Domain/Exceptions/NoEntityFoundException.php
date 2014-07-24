<?php namespace PhpDDD\Domain\Exceptions;

use Exception;

class NoEntityFoundException extends Exception{
	function __construct($message="", $code=0){
		$baseMessage = "No entities were found";
		if(!empty($message)){
			$baseMessage .= " - ".$message;
		}

		parent::__construct($baseMessage, $code);
	}
}