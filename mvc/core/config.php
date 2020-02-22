<?php
define('URL', 'http://localhost/');
define('IMAGES_URL', URL . 'mvc/public/assets/layout/images/');
define('CSS_URL', URL .  'mvc/public/assets/layout/css/');
define('JS_URL', URL . 'mvc/public/assets/layout/js/');
define('LAYOUT_TEMPLATE_URL', './mvc/views/layout/templates/');
define('LAYOUT_VIEWS_URL', './mvc/views/layout/');
define('ADMIN_VIEWS_URL', './mvc/views/admin/');
define('DEFAULT_URL', [
    'home.html' => 'Home/index',
    'product.html' => 'Product/index'    
]);

//database
define('SERVERNAME_DB', 'localhost');
define('USERNAME_DB', 'root');
define('PASSWORD_DB', '');
define('DATABASE_DEFAULT_DB', 'commerce');
