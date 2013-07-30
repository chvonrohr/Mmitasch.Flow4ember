<?php
namespace Mmitasch\Flow4ember\Serializer;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Mmitasch.Flow4ember".   *
 *                                                                        *
 *                                                                        */

/**
 * Interface for Serializers in Flow4ember package
 */
interface SerializerInterface {
	
	/**
	 * Used for serializing inputted objects
	 * 
	 * @param array $objects
	 * @param Mmitasch\Flow4ember\Domain\Model\Metamodel $metaModel
	 * @param boolean $isCollection
	 * @return type
	 */
	public function serialize (array $objects, \Mmitasch\Flow4ember\Domain\Model\Metamodel $metaModel, $isCollection);

}

?>