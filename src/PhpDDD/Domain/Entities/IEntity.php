<?php namespace PhpDDD\Domain\Entities;

/**
*	Represents an Entity
*/
interface IEntity{
	/**
	*	Saves the changes made to the entity
	*	@access public
	*	@return bool TRUE in case of success, FALSE otherwise	
	*/
	function saveChanges();
	
	/**
	*	Performes the model validation
	*	@access public
	*	@return bool TRUE if the model is valid, FALSE otherwise
	*/
	function isValid();
}