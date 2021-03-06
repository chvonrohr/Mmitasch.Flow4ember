<?php
namespace Mmitasch\Flow4ember;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Kickstart".             *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Package\Package as BasePackage,
	TYPO3\Flow\Annotations as Flow;

/**
 * The Kickstart Package
 */
class Package extends BasePackage {

	/**
	 * @Flow\Inject
	 * @var \TYPO3\Flow\Object\ObjectManagerInterface
	 */
	protected $objectManager;
	
	/**
	 * Invokes custom PHP code directly after the package manager has been initialized.
	 *
	 * @param \TYPO3\Flow\Core\Bootstrap $bootstrap The current bootstrap
	 * @return void
	 */
	public function boot(\TYPO3\Flow\Core\Bootstrap $bootstrap) {
		
//		$monitor = new \TYPO3\Flow\Monitor\FileMonitor('Handlebars Templates');
//		$monitor->monitorDirectory(__DIR__);
//		
		$dispatcher = $bootstrap->getSignalSlotDispatcher();
		$dispatcher->connect('TYPO3\Flow\Configuration\ConfigurationManager', 'configurationManagerReady',
        function ($configurationManager) {
                $configurationManager->registerConfigurationType('Ember');
        }
);
		
		
		
//        $dispatcher->connect(
//                'TYPO3\Flow\Monitor\FileMonitor', 'directoriesHaveChanged',
//                'Mmitasch\Flow4ember\Service\Notification', 'receiveDirectoriesHaveChanged'
//        );

	}

}
?>