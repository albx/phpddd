<?php namespace PhpDDD\Domain\Entities;

/**
*	Aggregate Root is the main entity of a group of related objects.
*/
interface IAggregateRoot{
	/**
	*	Check if the aggregate root can be saved
	*	@access public
	*	@return bool TRUE if the aggregate root can be saved, FALSE otherwise
	*/
	function canBeSaved();
	
	/**
	*	Check if the aggregate root can be deleted
	*	@access public
	*	@return bool TRUE if the aggregate root can be deleted, FALSE otherwise
	*/
	function canBeDeleted();
}