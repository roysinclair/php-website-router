<?php
/**
 * User: Roy Sinclair
 * Date: 2016/02/15
 * Time: 7:20 PM
 */
//session_start();
?>

<?php
// START BY LOADING SITE CONFIG
require('config/site.php');
?>
<?php
// LOAD HELPER Requests -- > This will load Client Information and Templates
require('routes.php');
?>

<?php
// LOAD includes/header --> Contains: Closing </head> AND Top Navigation
require(INCLUDES . '/header.php');
?>


<?php
// LOAD includes/container --> Contains: container-fluid and Bread Crumbs
if (!isset($PageMenu)) {
    require(PAGES . '/404/index.php');
    // Kill the site load so a hacker can't figure out what folders or other information you could be trying to load which might expose your folders
    exit();
}
require(INCLUDES . $PageMenu);
require(PAGES . $PageTemplate);
?>

<?php
// LOAD includes/header --> Contains: Closing </head> AND Top Navigation
require(INCLUDES . '/footer.php');
?>


<?php
// LOAD includes/header --> Contains: Closing </head> AND Top Navigation
require(INCLUDES . '/js.php');
require(PAGES . $PageScripts);
?>

<?php
echo '</body>';
echo '</html>';
?>



