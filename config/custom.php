<?php

return [
  'app_resource' => env('APP_RESOURCE', 'local'),
  'google_fonts' => [
    'open_sans' => 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600',
  ],
  'jquery' => [
    'local' => 'vendor/jquery/jquery.js',
    'production' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js',
  ],
  'holder' => [
    'local' => 'vendor/holder.js',
    'production' => 'https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js',
  ],
  'ie' => [
    'local' => 'vendor/ie10-viewport-bug-workaround.js',
    'production' => 'vendor/ie10-viewport-bug-workaround.js',
  ],
  'tooltip' => [
    'local' => 'https://unpkg.com/tooltip.js@1.2.0/dist/umd/tooltip.js',
    'production' => 'https://unpkg.com/tooltip.js@1.2.0/dist/umd/tooltip.js',
  ],
  'lazyload' => [
    'local' => 'https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js',
    'production' => 'https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js',
  ],
  'bootstrap' => [
    'local' => 'vendor/bootstrap/js/bootstrap.bundle.js',
    'production' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js',
  ],
  'fontawesome' => [
    'local' => 'vendor/fontawesome/css/all.css',
    'production' => 'https://use.fontawesome.com/releases/v5.0.13/css/all.css',
  ]
];
