<?php namespace PhpDDD\Domain\Events;

abstract class DomainEvent{
	/**
	 * Date and time of when the event is raised
	 * @var DateTime
	*/
	protected $raisedOn;

	function __construct(){
		$this->raisedOn = new DateTime();
	}
}