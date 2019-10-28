<?php

return [
    'offline'        => env('ASSETS_OFFLINE', true),
    'enable_version' => env('ASSETS_ENABLE_VERSION', false),
    'version'        => env('ASSETS_VERSION', time()),
    'scripts'        => [
        'jquery',
        'bootstrap',
        'adminlte',
        'jquery-overlay-scrollbars',
        'admin',
        'toastr'
    ],
    'styles'         => [
        'fontawesome',
        'overlay-scroll-bars',
        'adminlte',
        'google-fonts',
        'toastr',
        'toastr-extensions',
    ],
    'resources'      => [
        'scripts' => [
            'bootstrap'       => [
                'use_cdn'  => false,
                'location' => 'footer',
                'src'      => [
                    'local' => '/app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
                ],
            ],
            'jquery'       => [
                'use_cdn'  => false,
                'location' => 'footer',
                'src'      => [
                    'local' => '/app-assets/plugins/jquery/jquery.min.js',
                ],
            ],
            'jquery-overlay-scrollbars'       => [
                'use_cdn'  => false,
                'location' => 'footer',
                'src'      => [
                    'local' => '/app-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
                ],
            ],
            'adminlte'       => [
                'use_cdn'  => false,
                'location' => 'footer',
                'src'      => [
                    'local' => '/app-assets/dist/js/adminlte.js',
                ],
            ],
            'admin'       => [
                'use_cdn'  => false,
                'location' => 'footer',
                'src'      => [
                    'local' => '/app-assets/dist/js/admin.js',
                ],
            ],
            'select2' => [
                'use_cdn'  => false,
                'location'   => 'footer',
                'src'        => [
                    'local' => '/app-assets/plugins/select2/js/select2.full.min.js',
                ],
            ],
            'language' => [
                'use_cdn'  => false,
                'location'   => 'footer',
                'src'        => [
                    'local' => '/app-assets/language/js/language.min.js',
                ],
            ],
            'sweet-alert2' => [
                'use_cdn'  => false,
                'location'   => 'footer',
                'src'        => [
                    'local' => '/app-assets/plugins/sweetalert2/sweetalert2.all.min.js',
                ],
            ],
            'toastr' => [
                'use_cdn'  => false,
                'location'   => 'footer',
                'src'        => [
                    'local' => '/app-assets/plugins/toastr/toastr.min.js',
                ],
            ],
        ],
        'styles'  => [
            'fontawesome' => [
                'use_cdn'    => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/fontawesome/css/all.min.css',
                ],
            ],
            'overlay-scroll-bars' => [
                'use_cdn'    => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
                ],
            ],
            'adminlte' => [
                'use_cdn'    => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/dist/css/adminlte.min.css',
                ],
            ],
            'google-fonts' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/google-fonts/sans-pro.css',
                ],
            ],
            'select2' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/select2/css/select2.css',
                ],
            ],
            'select2bs4' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
                ],
            ],
            'icheck-bootstrap' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
                ],
            ],
            'animate' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/animate/animate.css',
                ],
            ],
            'sweet-alert2' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/sweetalert2/sweetalert2.min.css',
                ],
            ],
            'toastr' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/toastr/toastr.css',
                ],
            ],
            'toastr-extensions' => [
                'use_cdn'  => false,
                'location'   => 'header',
                'src'        => [
                    'local' => '/app-assets/plugins/toastr/extensions/toastr.css',
                ],
            ],
        ],
    ],
];
