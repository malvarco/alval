<?php namespace ProcessWire;
/**
 *
 */
?>


<div class="<?= $page->title ?>">
<h1><span><?php  echo $page->headline; ?></span></h1>
<?php
if ($imageCount = page()->images->count() > 1) {
    $secondImage = $page->images->eq(1)->url;
    echo "<div class='fixed-height-container'>";
    echo "<amp-img class='contain' alt='$page->headline' layout='fill' src='$secondImage' >";
    echo "</div>";
    }
?>

<div class="textbody">
<?= $page->body ?>
</div>


<div class="button-container">
<?php
if ($page->links != '') {
    if (strpos($page->links, "\n")) {
        $botones = explode("\n", $page->links);
        foreach($botones as $boton) {
            echo "<button>$boton</button>";
        }

    } else {
        echo "<button>" . $page->links . "</button>";
    }
}
?>
</div>
</div>


