<?php

define('BASE_URL', (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].preg_replace('@/+$@', '', trim(dirname($_SERVER['SCRIPT_NAME']), '\\')));

return (object) [
  'layout' => 'default',
];
