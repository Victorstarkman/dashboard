<?php

use CakeLte\Style\Header;
use CakeLte\Style\Sidebar;

return [
    'CakeLte' => [
        'app-name' => 'Dienst',
        'app-logo' => 'logo-white.png',

        'small-text' => false,
        'dark-mode' => false,
        'layout-boxed' => false,

        'header' => [
            'fixed' => false,
            'border' => true,
            'style' => Header::STYLE_WHITE,
            'dropdown-legacy' => false,
        ],

        'sidebar' => [
            'fixed' => true,
            'collapsed' => false,
            'mini' => true,
            'mini-md' => false,
            'mini-xs' => false,
            'style' => Sidebar::STYLE_DARK_SECONDARY,

            'flat-style' => false,
            'legacy-style' => false,
            'compact' => false,
            'child-indent' => false,
            'child-hide-collapse' => false,
            'disabled-auto-expand' => false,
        ],

        'footer' => [
            'fixed' => false,
        ],
    ],
];