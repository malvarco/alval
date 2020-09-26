<?php namespace ProcessWire;
/**{{
 * _main.php
 * Main markup file
 *
 * This file contains all the main markup for the site and outputs the regions 
 * defined in the initialization (_init.php) file. These regions include: 
 * 
 *   $title: The page title/headline 
 *   $content: The markup that appears in the main content/body copy column
 *   $sidebar: The markup that appears in the sidebar column
 * 
 * Of course, you can add as many regions as you like, or choose not to use
 * them at all! This _init.php > [template].php > _main.php scheme is just
 * the methodology we chose to use in this particular site profile, and as you
 * dig deeper, you'll find many others ways to do the same thing. 
 * 
 * This file is automatically appended to all template files as a result of 
 * $config->appendTemplateFile = '_main.php'; in /site/config.php. 
 *
 * In any given template file, if you do not want this main markup file 
 * included, go in your admin to Setup > Templates > [some-template] > and 
 * click on the "Files" tab. Check the box to "Disable automatic append of
 * file _main.php". You would do this if you wanted to echo markup directly 
 * from your template file or if you were using a template file for some other
 * kind of output like an RSS feed or sitemap.xml, for example. 
 *
 * See the README.txt file for more information. 
 *
 */
?>
<!doctype html>
<html ⚡ lang=es>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta name="description" content="<?php echo $page->summary; ?>" />
<link rel="icon" type="image/x-icon" href="<?php echo $config->urls->templates ?>assets/img/favicon.ico">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Poppins|Inconsolata">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <!-- Import other AMP Extensions here -->
<style id="ampcss" amp-custom>
/* Add your styles here */
body {   
    	background-color: black;
	width: auto;
	margin: 0;
	padding: 0;
	display: block;
  	}

/* ************************************************************************************ */

nav {
    background: #222;
    display: flex;
    flex-flow: wrap;
    justify-content: center;
    padding: 0;
    margin: 0;
    list-style: none;
}

a {
    color: white;
    text-decoration: none;
}

.espacio40porcent {
    width: 40%;
}

.lang-switcher {
	/* menu language switcher */
    width: 40%;
    text-align: right;
    font-family: Arial;
    padding-top: 20px;
}

.logo {
    width: 40%;
    text-align: left;
    padding: 10px;
}

.logo amp-img {
}


/* *********************************************************************************** */
/*  W3SCHOOLS DROPDOWN */
 /* Navbar container */
.navbar {
  overflow: hidden;
  width: 40%;
  background-color: #333;
  /* background-color: ##0fcfff; */
  font-family: Arial;
  padding: 10px;
  text-align: center;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}


/* Add a blackish background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #333;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #0fcfff;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/*********************************************************************
 * 4. Footer
 *
 */

 .footer {
	position: fixed;
	bottom:0;
	background-color: black;
	color: lightcyan;
	line-height: 3;
	text-align: center;
	width: 100%;
	font-size: 1em; 
}

    </style>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <link rel="canonical" href=".">
	<title><?php echo $title; ?></title>
  </head>
<body> 
<?php include("./includes/main/header" . ".php"); ?>

<pw-region id="estatico" pw-optional>
</pw-region>

<pw-region id="dinamico" pw-optional>
		<div id='body-field'> 
			<h1><?php// echo $title; ?></h1>
			<?php echo $content; ?>
		</div>
</pw-region>

<pw-region id="relacionados" pw-optional>
</pw-region>

<!-- }} -->
<footer class="footer"> <!-- {{ -->
<?php  echo $pages->get('contacto')->summary; ?>
</footer>

</body>
</html>
