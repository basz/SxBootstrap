<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'tabs'            => 'SxBootstrap\View\Helper\Bootstrap\Tabs',
            'formColorpicker' => 'SxBootstrap\View\Helper\Bootstrap\FormColorPicker',
            'bootstrap'       => 'SxBootstrap\View\Helper\Bootstrap\Bootstrap',
        ),
    ),
    'asset_manager'   => array(
        'resolver_configs' => array(
            'collections' => array(
                'js/bootstrap.js' => array(
                    'js/bootstrap-transition.js',
                    'js/bootstrap-alert.js',
                    'js/bootstrap-button.js',
                    'js/bootstrap-carousel.js',
                    'js/bootstrap-collapse.js',
                    'js/bootstrap-dropdown.js',
                    'js/bootstrap-modal.js',
                    'js/bootstrap-tooltip.js',
                    'js/bootstrap-popover.js',
                    'js/bootstrap-scrollspy.js',
                    'js/bootstrap-tab.js',
                    'js/bootstrap-typeahead.js',
                    'js/bootstrap-affix.js',
                ),
                'css/bootstrap.css' => array(
                    'css/bootstrap1.css',
                    'css/colorpicker.css',
                ),
            ),
            'map' => array(
                'css/colorpicker.css'                => __DIR__ . '/../public/css/colorpicker.css',
                'js/bootstrap-colorpicker.js'        => __DIR__ . '/../public/js/bootstrap-colorpicker.js',
                'img/alpha.png'                      => __DIR__ . '/../public/img/alpha.png',
                'img/hue.png'                        => __DIR__ . '/../public/img/hue.png',
                'img/saturation.png'                 => __DIR__ . '/../public/img/saturation.png',
                'img/glyphicons-halflings.png'       => 'vendor/twitter/bootstrap/img/glyphicons-halflings.png',
                'img/glyphicons-halflings-white.png' => 'vendor/twitter/bootstrap/img/glyphicons-halflings-white.png',
                'css/bootstrap1.css'                  => 'vendor/twitter/bootstrap/less/bootstrap.less',
                'js/bootstrap-affix.js'              => 'vendor/twitter/bootstrap/js/bootstrap-affix.js',
                'js/bootstrap-alert.js'              => 'vendor/twitter/bootstrap/js/bootstrap-alert.js',
                'js/bootstrap-button.js'             => 'vendor/twitter/bootstrap/js/bootstrap-button.js',
                'js/bootstrap-carousel.js'           => 'vendor/twitter/bootstrap/js/bootstrap-carousel.js',
                'js/bootstrap-collapse.js'           => 'vendor/twitter/bootstrap/js/bootstrap-collapse.js',
                'js/bootstrap-dropdown.js'           => 'vendor/twitter/bootstrap/js/bootstrap-dropdown.js',
                'js/bootstrap-modal.js'              => 'vendor/twitter/bootstrap/js/bootstrap-modal.js',
                'js/bootstrap-popover.js'            => 'vendor/twitter/bootstrap/js/bootstrap-popover.js',
                'js/bootstrap-scrollspy.js'          => 'vendor/twitter/bootstrap/js/bootstrap-scrollspy.js',
                'js/bootstrap-tab.js'                => 'vendor/twitter/bootstrap/js/bootstrap-tab.js',
                'js/bootstrap-tooltip.js'            => 'vendor/twitter/bootstrap/js/bootstrap-tooltip.js',
                'js/bootstrap-transition.js'         => 'vendor/twitter/bootstrap/js/bootstrap-transition.js',
                'js/bootstrap-typeahead.js'          => 'vendor/twitter/bootstrap/js/bootstrap-typeahead.js',
            ),
        ),
        'filters' => array(
            'css/bootstrap.css' => array(
                array(
                    'service' => 'SxBootstrap\Service\BootstrapAssetFilter',
                ),
            ),
        ),
    ),
    'service_manager' => array (
        'factories' => array (
            'SxBootstrap\Service\BootstrapAssetFilter' => 'SxBootstrap\Service\BootstrapAssetFilterServiceFactory',
        ),
    ),
    'twitter_bootstrap' => array(
        'variables'    => include 'variables.config.php',
        'import_files' => include 'imports.config.php',
    ),
);
