<?php
/**
 * User: Roy Sinclair
 * Date: 2016/02/28
 * Time: 4:06 PM
 */

/*
GET REQUESTS WHICH LOAD THE PAGES WE NEED
*/
$ROUTE = $_SERVER['QUERY_STRING'];
$ROUTE = $_SERVER['REQUEST_URI'];

// This may not be required however for my local machine it is
$ROUTE = str_replace("/$SiteDIR", "", $ROUTE);
// echo 'I will remove it before live --> ' . $ROUTE;

/* ======== ========= ========= DEFAULT VALUES ========= ========= ========= */
$custom_body = '';
if ($ROUTE === "") {
    header("Location: $SiteUrl/index.html");
}

/* ======== ========= ========= HOME PAGE ========= ========= ========= */
if ($ROUTE == "index.php" || $ROUTE == "index.html") {

    // Page Title
    $pageTitle = 'Home page';

    $PageMenu = '/menu.php';
    $PageTemplate = '/home/index.php';
    $PageScripts = '/home/scripts.js.php';

}
/* ======== ========= ========= ABOUT PAGE ========= ========= ========= */
if ($ROUTE == "about.html" || $ROUTE == "about") {

    // Page Title
    $pageTitle = 'About page';

    $PageMenu = '/menu.php';
    $PageTemplate = '/about/index.php';
    $PageScripts = '/about/scripts.js.php';
}

/* ======== ========= ========= ANOTHER PAGE ========= ========= ========= */
if ($ROUTE == "another.html" || $ROUTE == "another" || $ROUTE == "another/sub.html" || $ROUTE == "another/sub") {

    // Page Title
    $pageTitle = 'Another page';

    $PageMenu = '/menu.php';
    $PageTemplate = '/another/index.php';
    $PageScripts = '/another/scripts.js.php';
}

/* ======== ========= ========= CUSTOM PAGE ========= ========= ========= */
if ($ROUTE == "custom.ext" || $ROUTE == "custom.page") {

    // Page Title
    $pageTitle = 'Custom page';

    $PageMenu = '/menu.php';
    $PageTemplate = '/custom/index.php';
    $PageScripts = '/custom/scripts.js.php';
}