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
<?= $pages->get('/estaticos/alval-banner')->amp_css; ?>
<?= $pages->get('/estaticos/card1-sclasshub')->amp_css; ?>
.container-inline {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 50px;
    justify-content: flex-start;
}
<?= $pages->get('/estaticos/card2-letstalkenglish')->amp_css; ?>
<?= $pages->get('/estaticos/card3-sclasslive')->amp_css; ?>



</p>


<div id="estatico">
<?php
echo $pages->get('/estaticos/hero')->render();
echo $pages->get('/estaticos/alval-banner')->render();
echo "<h1 style='color:azure'>PRODUCTOS</h1>";
echo $pages->get('/estaticos/card1-sclasshub')->render();
echo "<div class='container-inline'>";
echo $pages->get('/estaticos/card2-letstalkenglish')->render();
echo $pages->get('/estaticos/card3-sclasslive')->render();
echo "</div>";
?>

</div> <!-- estaticos -->

<div id="dinamico"></div>




