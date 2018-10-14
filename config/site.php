<?php
/**
 * User: Roy Sinclair
 * Date: 2016/02/15
 * Time: 7:20 PM
 */
ob_start();

//set timezone
date_default_timezone_set('Africa/Johannesburg');

/* SITE NAME */
define('SITENAME', "Demo Site");
$ENV = 'local';

if($ENV == 'local') {
    $SiteUrl    = 'http://localhost/demo-php-routing';
    $SiteDIR    = 'demo-php-routing/';

}
if ($ENV == 'live'){
    $SiteUrl    = 'http://website.com';
    $SiteDIR    = '';
}

/*  SITE FOLDER SETUP
 *  SITE ROOT, CONFIG, PLUGINS, VIEWS, TEMPLATES, CONTROLLERS, MODULES
 *  Main Site Folders
 */

// Site DIR
$SiteFOLDER = dirname(__DIR__);

// Site ROOT Folder
define('ROOT',   $SiteFOLDER);

// Site CONFIG Folder - This contains the DB Config and Folders
define('CONFIG', ROOT."/config/");

// Site HELPERS and FUNCTIONS such as API
define('HELPERS', ROOT."/helpers");

// PHP: TEMPLATES FOLDERS AND FILES
define('TEMPLATES', ROOT."/templates");
define('INCLUDES', TEMPLATES."/includes");
define('PAGES', ROOT."/pages");

// JS, CSS, PLUGINS
define('JS', $SiteUrl."/js");
define('CSS', $SiteUrl."/css");
define('IMAGES', $SiteUrl."/images");






