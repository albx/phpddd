<?php namespace PhpDDD\Domain\Exceptions;

use Exception;

class EntityNotDeletedException extends Exception{
	function __construct($message="", $code=0){
		$baseMessage = "This entity could not be deleted";
		if(!empty($message)){
			$baseMessage .= " - ".$message;
		}

		parent::__construct($baseMessage, $code);
	}
}