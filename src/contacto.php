<?php namespace ProcessWire;
/**
 *
 */
?>

<?php
if(!empty($_POST)){
$name=$_POST['nombre'];
$escuela=$_POST['escuela'];
$email = $_POST['correo'];
$phone = $_POST['fono'];
$enquiry = $_POST['asunto'];
$mensaje= $_POST['mensaje'];
$formcontent=" De: $name \n Escuela: $escuela \n Teléfono: $phone \n **************************** \n Mensaje:\n $mensaje";
$recipient = "avaldenegro@alval.cl";
$subject = $enquiry;
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

       $domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        header("Content-type: application/json");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Origin: ". str_replace('.', '-','https://www.alval.cl') .".cdn.ampproject.org");
        header("AMP-Access-Control-Allow-Source-Origin: " . $domain_url);
        header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
        header("AMP-Redirect-To: https://www.alval.cl");
        header("Access-Control-Expose-Headers: AMP-Redirect-To, AMP-Access-Control-Allow-Source-Origin"); 
        echo json_encode(array('name' => $name));
        exit;
}
?>


<div class="<?= $page->title ?>">


<?php
$etiqueta = str_getcsv($page->etiquetas, "\n");
?>   

<div class="block-contacto">
<a id="<?= $page->anchor ?>"></a>
    <div class="image-contacto">
    <amp-img class="contain" alt="Aldo Valdenegro" height="450" width="450" layout="fixed" src="<?= $page->images->get('aldo_valdenegro.jpg')->url; ?>" >
    </div>

    <div class="contactenos"><?= $page->body ?></div>

</div>


<div class="form-container">
    <form class="contact-box"
      method="post"
      action-xhr="<?= $page->url ?>"
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
            <input type="tel"
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
    </form>
</div>



</div>
