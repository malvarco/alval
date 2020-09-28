<?php namespace ProcessWire;
/**
 *
 */
?>


<div class="<?= $page->title ?>">
<h1><?php  echo $page->headline; ?></h1>
<div class="button-container">

<?php
$botones = explode("\n", $page->links);
   foreach($botones as $boton) {
      echo "<button>$boton</button>";
}
?>
</div>
<div class="banner-textbody">
<?= $page->body ?>
</div>
</div>


