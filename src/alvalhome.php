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

.content p {
   color: red;
}

/* 1.Front-banner style */

.alval-lab-banner {
    position: absolute;
    background-image: url('<?php echo $pages->get('/productos/smartclass-live')->images->get('img_20170331_090539_medium.jpg')->httpUrl; ?>');
    background-repeat: no-repeat;
    background-attachmente: fixed;
    background-position: center;
    height: 768px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.alval-lab-banner h1 {
    color: navy;
    font-family: Arial;
    font-size: 50px;
    text-align: center;
    padding-bottom: 12%;
}

.alval-lab-banner ul {
   color: aquamarine;
   font-family: Arial;
   font-size: 2em;
   text-align: left;
   padding-right: 20%;
}

.alval-lab-banner p {
   background: white;
   color: navy;
   width: 33%;
   font-family: Arial;
   font-size: 30px;
   flex-wrap: wrap;
   text-align: center;
   padding: 10px;
   border-radius: 25px;
}

</p>


<div id="page-banners">
<div class="alval-lab-banner">
<h1><?php  echo $pages->get('/')->headline; ?></h1>
<ul>
<li>Plataforma</li>
<li>Contenido</li>
<li>Laboratorio de idiomas</li>
</ul>
    <p>ALVAL LANGUAGE SYSTEMS implementa soluciones educativas para apoyar a los profesores de idiomas en la enseñanza y para brindar a los alumnos un sistema de aprendizaje moderno, entretenido y eficaz.</p>
</div>
</div>

<div id="bodypage-content"></div>



