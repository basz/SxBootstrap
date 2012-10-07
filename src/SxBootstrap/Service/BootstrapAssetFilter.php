<?php

namespace SxBootstrap\Service;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\LessphpFilter;
use SxBootstrap\Exception;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

class BootstrapAssetFilter extends LessphpFilter implements ServiceLocatorAwareInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;

    /**
     * @var AssetInterface
     */
    protected $asset;

    /**
     * @var array The files to be imported.
     */
    protected $imports;

    /**
     * Constructs the service right before
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Sets the by-config generated imports on the asset.
     * {@inheritDoc}
     */
    public function filterLoad(AssetInterface $asset)
    {
        $root = $asset->getSourceRoot();
        $path = $asset->getSourcePath();
        echo "$path\n";
        $lc   = new \lessc();

        $lc->setImportDir(array(dirname($root.'/'.$path)));
        $lc->setVariables($this->config['variables']);

        $asset->setContent($lc->parse($this->filterImportFiles()));
    }

    /**
     * Filter the import files needed.
     *
     * @return array
     * @throws Exception\RuntimeException
     */
    protected function filterImportFiles()
    {
        if (null !== $this->imports) {
            return $this->imports;
        }

        $config = $this->config;

        if (!empty($config['excluded_components']) && !empty($config['included_components'])) {
            throw new Exception\RuntimeException(
                'You may not set both excluded and included components.'
            );
        }

        if (!empty($config['excluded_components'])) {
            $this->removeImportFiles($config['excluded_components']);
        } elseif(!empty($config['included_components'])) {
            $this->addImportFiles($config['included_components']);
        }

        array_walk($this->config['import_files'], function(&$val) {
            $val = "@import \"$val\";";
        });

        return $this->imports = implode(PHP_EOL, $this->config['import_files']);
    }

    /**
     * Remove import files from the import config.
     *
     * @param array $config
     */
    protected function removeImportFiles(array $config)
    {
        foreach ($config as $item) {
            if (in_array($item, $this->config['import_files'])) {
                unset($this->config['import_files'][array_search($item)]);
            }
        }
    }


    /**
     * Remove everything from the import config except for the values in $config
     * @param array $config
     */
    protected function addImportFiles(array $config)
    {
        foreach ($this->config['import_files'] as $key => $if) {
            if (!in_array($if, $config)) {
                unset($this->config['import_files'][$key]);
            }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function filterDump(AssetInterface $asset)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     * {@inheritDoc}
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }
}
