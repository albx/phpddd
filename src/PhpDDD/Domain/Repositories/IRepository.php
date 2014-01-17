<?php namespace PhpDDD\Domain\Repositories;

use IteratorAggregate;
use ArrayAccess;
use PhpDDD\Domain\Entities\IAggregateRoot;

/**
*	Repository is a collection like object which manage the persistence of an entity.
*	According to Domain Driven Design a repository persists only an Aggregate Root.
*	This interface extends the IteratorAggregate and the ArrayAccess interfaces to provides a collection like behaviour.
*/
interface IRepository extends IteratorAggregate, ArrayAccess{
	/**
	*	Gets a collection of all entities in the repository
	*	@access public
	*	@return object the repository itself
	*/
	function all();
	
	/**
	*	Add an entity to the repository
	*	@access public
	*	@param IAggregateRoot the entity to add (MUST implements IAggregateRoot interface)
	*	@return void
	*/
	function add(IAggregateRoot $model);
	
	/**
	*	Removes an entity from the repository
	*	@access public
	*	@param IAggregateRoot the entity to remove (MUST implements IAggregateRoot interface)
	*	@return void
	*/
	function remove(IAggregateRoot $model);
	
	/**
	*	Updates an entity of the repository
	*	@access public
	*	@param IAggregateRoot the entity to update (MUST implements IAggregateRoot interface)
	*	@return void
	*/
	function update(IAggregateRoot $model);
}