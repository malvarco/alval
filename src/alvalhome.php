<?php namespace ProcessWire;

// home.php (homepage) template file. 
// See README.txt for more information

// Primary content is the page body copy and navigation to children. 
// See the _func.php file for the renderNav() function example

/* must be the path to your page from home,
   e.g. simply '/' if you want to retrieve
   the home page itself
*/
?>
<p id='ampcss' pw-append>

/* AMP CSS Alval homepage */

<?= $pages->get('/estaticos/hero')->amp_css; ?>



</p>


<div id="estatico">
<?php// include("./includes/contents/home/estatico.inc" . ".php"); ?>
<?php
    echo $hero = $pages->get('/estaticos/hero')->render();
?>
</div>

<div id="dinamico"></div>




