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
    margin-top: 100px;
    position: absolute;
    background-image: url('<?php echo $pages->get('/avisos/aviso1')->images->get('img_20170331_090539lb.jpg')->url; ?>');
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
    color: dodgerblue;
    font-family: Arial;
    font-size: 50px;
    margin-bottom: 300px;
    border-radius: 15px; 
    text-align: center;
    padding: 10px;
    background: ghostwhite;
}


.button-container {
  width: 70%;
  padding: 0;
  margin-top: 150px;
  list-style: none;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
}

.button-container button {
  transition: all 0.5s ease;
  color: #fff;
  border: 3px solid white;
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  text-align: center;
  line-height: 1;
  font-size: 17px;
  background-color: transparent;
  padding: 10px;
  outline: none;
  border-radius: 4px;
  min-width: 250px;
}

button:hover {
  color: #001f3f;
  border-color: dodgerblue;
}

.alval-lab-banner p {
   color: cornsilk;
   width: 50%;
   font-family: Roboto;
   font-size: 30px;
   flex-wrap: wrap;
   text-align: center;
   margin-bottom: 150px;
   border-radius: 25px;
}
</p>


<?php include("./includes/contents/home/estatico.inc" . ".php"); ?>

<div id="dinamico"></div>




