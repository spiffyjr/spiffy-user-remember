<?php

namespace SpiffyUserRemember;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return ModuleOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config  = $serviceLocator->get('Configuration');
        $config  = isset($config['spiffy_user_remember']) ? $config['spiffy_user_remember'] : array();

        return new ModuleOptions($config);
    }
}