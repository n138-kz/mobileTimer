<?php
  header('Content-Type: Application/json; charset=utf-8');
  header("Cache-Control: no-cache, must-revalidate");

  $dir = explode('/',$_SERVER['REQUEST_URI']);

  $manifest = [
    'name'             => "Mobile Timer",
    'short_name'       => "Mobile Timer",
    'description'      => "Mobile Timer",
    'display'          => "standalone",
    'background_color' => "#000",
    'theme_color'      => "#000",
    'orientation'      => 'landscape',
    "start_url"        => '/'.$dir[count($dir)-3].'/'.'?src=apps',
    "icons"            => [
      [
        'type'  => 'image/png',
        'src'   => 'icon064.png',
        'sizes' => '64x64',
      ],
      [
        'type'  => 'image/png',
        'sizes' => '128x128',
        'src'   => 'icon128.png',
      ],
      [
        'type'  => 'image/png',
        'sizes' => '192x192',
        'src'   => 'icon192.png',
      ],
      [
        'type'  => 'image/png',
        'sizes' => '256x256',
        'src'   => 'icon256.png',
      ],
    ]
  ];

  echo json_encode($manifest, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
