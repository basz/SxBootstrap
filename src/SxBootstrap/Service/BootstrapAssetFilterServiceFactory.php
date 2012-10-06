<?php

namespace SxBootstrap\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class BootstrapAssetFilterServiceFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     *
     * @return BootstrapAssetFilter
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config             = $serviceLocator->get('Config');
        $assetFilterManager = new BootstrapAssetFilter($config['twitter_bootstrap']);

        $assetFilterManager->setServiceLocator($serviceLocator);

        return $assetFilterManager;
    }
}
