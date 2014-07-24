<?php namespace PhpDDD\Domain\Exceptions;

use Exception;

class EntityNotSavedException extends Exception{
	function __construct($message="", $code=0){
		$baseMessage = "This entity could not be saved";
		if(!empty($message)){
			$baseMessage .= " - ".$message;
		}

		parent::__construct($baseMessage, $code);
	}
}