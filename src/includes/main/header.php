<?php namespace ProcessWire;
/** Global Navbar header include
* usado en _main.php
*
*/
?>
<header> 
<!--  mensaje de manols -->
<nav>
<div class="espacio40porcent"></div>

<div class="lang-switcher">
<?php foreach($languages as $language) : ?>
<?php if($user->language->id != $language->id) :?>
<?php // else : ?>
<a href="<?=$page->localUrl($language)?>"><?=$language->title?></a>
 <?php endif;?>
<?php endforeach;?>
</div>


<div class="logo">
<a href="<?= $homepage->url ?>">
<!-- logo image version -->
<amp-img
	alt="Logo de Alval Language Systems"
	src="<?= $pages->get('/')->images->get('logo.png')->httpUrl; ?>"
	width="200"
	height="70"
        layout="fixed">
</amp-img>

</a>
</div>

<div class="navbar">
<?php
// top navigation consists of homepage and its visible children
    foreach($homepage->children as $item) {
	if($item->hasChildren()) {
       		echo "<div class='dropdown'>";
       		echo "<button class='dropbtn'>$item->title";
        	echo "<i class='fa fa-caret-down' style='margin-left:5px'></i>";
        	echo "</button>";
        	echo "<div class='dropdown-content'>";
    			foreach($item->children as $subitem) {
			echo "<a href='$subitem->url'>$subitem->title</a>";
			}
		echo "</div>";
		echo "</div>\r\n";
				} else {
	echo "<a href='$item->url'>$item->title</a>";
    					}
    }
?>
</div>  <!-- END OF NAVBAR -->

</nav>
</header>
