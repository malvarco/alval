<?php namespace ProcessWire;
/**
 *
 */
?>

<div class="<?= $page->title ?>">


<?php
$etiqueta = str_getcsv($page->etiquetas, "\n");
?>   

<div class="block-contacto">
    <div class="image-contacto">
    <amp-img class="contain" alt="Aldo Valdenegro" height="450" width="450" layout="fixed" src="<?= $page->images->get('aldo_valdenegro.jpg')->url; ?>" >
    </div>

    <div class="contactenos"><?= $page->body ?></div>

</div>

<div class="form-container">
    <form class="contact-box"
      method="post"
      action-xhr="/documentation/examples/api/submit-form-input-text-xhr"
      target="_top">
            <div class="input-fields">
            <input type="text"
            class="input-text"
            name="nombre"
            placeholder="<?= $etiqueta[0]; ?>"
            required>
            <input type="text"
            class="input-text"
            name="escuela"
            placeholder="<?= $etiqueta[1]; ?>"
            required>
            <input type="email"
            class="input-text"
            name="correo"
            placeholder="<?= $etiqueta[2]; ?>"
            required>
            <input type="text"
            class="input-text"
            name="fono"
            placeholder="<?= $etiqueta[3]; ?>"
            required>
            <input type="text"
            class="input-text"
            name="asunto"
            placeholder="<?= $etiqueta[4]; ?>"
            required>
            <textarea
            class="input-text"
            autoexpand
            rows="6"
            name="mensaje"
            placeholder="<?= $etiqueta[5]; ?>"
            required></textarea>
            <input class="boton-enviar" type="submit" value="<?= $etiqueta[6]; ?>">
            </div>
<div class="respuestas" submit-success>
    <template type="amp-mustache">
     <?= $etiqueta[7]; ?> 
    </template>
  </div>
  <div class="respuestas" submit-error>
    <template type="amp-mustache">
¡Ha RRUURRRocurrido {{nombre}} un error!
    </template>
  </div>
    </form>
</div>


</div>
