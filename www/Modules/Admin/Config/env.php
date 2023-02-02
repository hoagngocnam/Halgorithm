<?php

defined('NOTIFICATION') or define('NOTIFICATION', [
    'success' => 'success',
    'info' => 'info',
    'warning' => 'warning',
    'danger' => 'danger',
]);

defined('DEFAULT_IMAGE') or define('DEFAULT_IMAGE', 'uploads/default.jpg');

defined('ROLE') or define('ROLE', [
    'manager' => 9,
    'admin' => 1,
    'customer' => 0
]);

defined('GUARDS') or define('GUARDS', [
    'admin' => 'admin',
    'stores' => 'stores',
    'users' => 'users'
]);

defined('NUMBER_RECORD') or define('NUMBER_RECORD', [
    10 => 10,
    25 => 25,
    50 => 50
]);

defined('ACTIVATED') or define('ACTIVATED', 1);

defined('IN_ACTIVATED') or define('IN_ACTIVATED', 0);
