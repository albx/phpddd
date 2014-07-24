<?php namespace PhpDDD\Domain\Exceptions;

use Exception;

class CouldNotCreateEntityException extends Exception{
	function __construct($message="", $code=0){
		$baseMessage = "This entity could not be created";
		if(!empty($message)){
			$baseMessage .= " - ".$message;
		}

		parent::__construct($baseMessage, $code);
	}
}