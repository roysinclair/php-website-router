## PHP Custom router
PHP framework with the ability to create website based on your own template and create custom SEO friendly URI for you site.
Additionally run page specific js script 
  

## Motivation
An easy way to create an SEO friendly PHP website based on a website template.
 
## Tech/framework used
<b>Built with</b>
- PHP

## Features
.htacess for Apache web server

web.config for IIS web server

Customize your URI and file extension e.g. make about.php become http://example.com/about/about.html

Make SEO friendly URI's

Build based on a website template 

Incorrect URI will send the user to a 404 page
  
## Installation
Open config/site.php 
Configure $ENV to local or live

## How to use?
Set your $SiteUrl to your URI

If in a sub folder set $SiteDIR to the folder name 

##### Website template
Build your template by editing the following in the templates/includes folder

header.php - Contains all your website/templates header information e.g. CSS 

menu.php - Website navigation template

footer.php - Should you wish to include a footer for each page

js.php - Javascript scripts to be included on pages

##### Pages
This is folder where you would have created individual website pages

Each individual page you create should include 2 php files in the folder
index.php and scripts.js.php
 
index.php will be where you insert your page content

scripts.js.php is for individual script you wish to include for that individual page 

##### Routes
Open routes.php
Creating a route 
<code>
// HOME PAGE

if ($ROUTE == "index.php" || $ROUTE == "index.html") { 

// This would make the site URI http://example.com/index.php or http://example.com/index.html 

    // Page Title
    $pageTitle = 'Home page'; // Optional include page title 

    // Custom CSS
    $custom_CSS = '';

    $PageMenu = '/menu.php'; // Include menu 
    $PageTemplate = '/home/index.php'; // Include page location specify folder and index.php
    $PageScripts = '/home/scripts.js.php'; // Include page script

}
</code>

<code>
// SUB FOLDERS PAGE

if ($ROUTE == "another.html" || $ROUTE == "another" || $ROUTE == "another/sub.html" || $ROUTE == "another/sub") { 

// This would make the site URI http://example.com/another.html, http://example.com/another, http://example.com/another/sub.html and http://example.com/another/sub  

    // Page Title
    $pageTitle = 'Another page'; // Optional include page title 

    // Custom CSS
    $custom_CSS = '';

    $PageMenu = '/menu.php'; // Include menu 
    $PageTemplate = '/another/index.php'; // Include page location specify folder and index.php
    $PageScripts = '/another/scripts.js.php'; // Include page script

}
</code>

<code>
// CUSTOM PAGE

if ($ROUTE == "custom.ext" || $ROUTE == "custom.page") { 

// This would make the site URI http://example.com/custom.ext or http://example.com/custom.page 

    // Page Title
    $pageTitle = 'Custom page'; // Optional include page title 

    // Custom CSS
    $custom_CSS = '';

    $PageMenu = '/menu.php'; // Include menu 
    $PageTemplate = '/custom/index.php'; // Include page location specify folder and index.php
    $PageScripts = '/custom/scripts.js.php'; // Include page script

}
</code>
  
## License
A short snippet describing the license (MIT, Apache etc)

MIT © [Roy Sinclair]()