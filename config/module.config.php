<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'view_helpers' => array (
        'invokables' => array (
            'tabs'              => 'SxBootstrap\View\Helper\Bootstrap\Tabs',
            'formColorpicker'   => 'SxBootstrap\View\Helper\Bootstrap\FormColorPicker',
        ),
    ),
    'asset_manager' => array(
        'resolver_configs' => array(
            'map' => array(
                'css/colorpicker.css'           => __DIR__ . '/../public/css/colorpicker.css',
                'js/bootstrap-colorpicker.js'   => __DIR__ . '/../public/js/bootstrap-colorpicker.js',
                'img/alpha.png'                 => __DIR__ . '/../public/img/alpha.png',
                'img/hue.png'                   => __DIR__ . '/../public/img/hue.png',
                'img/saturation.png'            => __DIR__ . '/../public/img/saturation.png',
            ),
        ),
    ),
);
