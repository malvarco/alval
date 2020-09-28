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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins|Inconsolata|Montserrat">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <!-- Import other AMP Extensions here -->
<style id="ampcss" amp-custom>
/* Add your styles here */

<?php include("./includes/main/main_ampcss" . ".php"); ?>


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


<?php include("./includes/main/footer" . ".php"); ?>
</body>
</html>
