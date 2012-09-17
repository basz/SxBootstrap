<?php

namespace SxBootstrap;

class Module
{
    public function getServiceConfig()
    {
        return array(
            'asset_manager' => array(
                'resolver_configs' => array(
                    'collections' => array(
                        'js/bootstrap.js' => array(
                            'js/bootstrap-affix.js',
                            'js/bootstrap-alert.js',
                            'js/bootstrap-button.js',
                            'js/bootstrap-carousel.js',
                            'js/bootstrap-collapse.js',
                        ),
                    ),

                    'map' => array(
                        'js/bootstrap-affix.js' => 'vendor/twitter/bootstrap/js/bootstrap-affix.js',
                        'js/bootstrap-alert.js' => 'vendor/twitter/bootstrap/js/bootstrap-alert.js',
                        'js/bootstrap-button.js' => 'vendor/twitter/bootstrap/js/bootstrap-button.js',
                        'js/bootstrap-carousel.js' => 'vendor/twitter/bootstrap/js/bootstrap-carousel.js',
                        'js/bootstrap-collapse.js' =>'vendor/twitter/bootstrap/js/bootstrap-collapse.js',
                    ),
                ),
            ),
        );
    }
}
