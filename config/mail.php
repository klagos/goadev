<?php

return [
'driver' => env('MAIL_DRIVER', 'smtp'),
'host'   => env('MAIL_HOST', 'smtp.gmail.com'),
'port'   => env('MAIL_PORT', 587),
'from'   => [
   'address' => env('MAIL_FROM_ADDRESS', 'adm.gameoveraddiction@gmail.com'),
   'name' => env('MAIL_FROM_NAME', 'Example')
],
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => env('MAIL_USERNAME', 'adm.gameoveraddiction@gmail.com'),
'password' => env('MAIL_PASSWORD', 'Aa36522654'),
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => FALSE,

];
