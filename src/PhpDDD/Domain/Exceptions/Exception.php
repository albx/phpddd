<?php namespace PhpDDD\Domain\Exceptions;

use Exception;

class CouldNotCreateEntityException extends Exception{
	function __construct(string $message="", int $code=0){
		parent::__construct($message, $code);
	}
}

class EntityNotSavedException extends Exception{
	function __construct(string $message="", int $code=0){
		parent::__construct($message, $code);
	}
}

class EntityNotDeletedException extends Exception{
	function __construct(string $message="", int $code=0){
		parent::__construct($message, $code);
	}
}

class NoEntityFoundException extends Exception{
	function __construct(string $message="", int $code=0){
		parent::__construct($message, $code);
	}
}