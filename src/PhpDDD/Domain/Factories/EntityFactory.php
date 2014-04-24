<?php namespace PhpDDD\Domain\Factories;

use PhpDDD\Domain\Entities\IEntity;
use PhpDDD\Domain\Exceptions\CouldNotCreateEntityException;

/**
*	This class provides a generic method to create an instance of an entity using Factory Method.
*/
abstract class EntityFactory{
	/**
	*	Creates an entity depending on the entity name and the fields passed
	*	@access public
	*	@param string the name of the entity to create
	*	@param array the fields of the entity passed as an associative array
	*	@return object the entity created
	*/
	public static function createEntity($entity_name, array $fields=array()){
		$class_name = ucfirst($entity_name);
		$entity = new $class_name();
		
		if(!($entity instanceof IEntity)){
			throw new CouldNotCreateEntityException("The object must inherit IEntity interface");
		}
		
		if(!empty($fields)){
			foreach($fields as $field=>$value){
				$entity->{$field} = $value;
			}
		}
		
		return $entity;
	}
}