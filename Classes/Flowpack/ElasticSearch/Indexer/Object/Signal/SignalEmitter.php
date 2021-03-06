<?php
namespace Flowpack\ElasticSearch\Indexer\Object\Signal;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Flowpack.ElasticSearch".*
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Scope("singleton")
 */
class SignalEmitter {

	/**
	 * @Flow\Signal
	 * @param object $object The object that has been updated
	 * @return void
	 */
	public function emitObjectUpdated($object) { }

	/**
	 * @Flow\Signal
	 * @param object $object The object that has been updated
	 * @return void
	 */
	public function emitObjectPersisted($object) { }

	/**
	 * @Flow\Signal
	 * @param object $object The object that has been updated
	 * @return void
	 */
	public function emitObjectRemoved($object) { }

}

