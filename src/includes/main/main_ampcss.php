
body {   
    background-color: black;
	display: block;
    font-family: "Open sans",Helvetica,Arial,sans-serif;
    margin: auto; 
    padding: 0;
    text-align: center;
    width: auto; 
  	}

/* ************************************************************************************ */

nav {
    background: #222;
    display: flex;
    flex-flow: wrap;
    justify-content: center;
    padding: 0;
    margin: 0;
    list-style: none;
}

a {
    color: white;
    text-decoration: none;
}

.espacio40porcent {
    width: 40%;
}

.lang-switcher {
	/* menu language switcher */
    width: 40%;
    text-align: right;
    font-family: Arial;
    padding-top: 20px;
}

.logo {
    width: 40%;
    text-align: left;
    padding: 10px;
}

.logo amp-img {
}


/* *********************************************************************************** */
/*  W3SCHOOLS DROPDOWN */
 /* Navbar container */
.navbar {
  overflow: hidden;
  width: 40%;
  background-color: #333;
  /* background-color: ##0fcfff; */
  font-family: Arial;
  padding: 10px;
  text-align: center;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}


/* Add a blackish background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #333;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #0fcfff;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/*********************************************************************
 * 4. Footer
 *
 */

 .footer {
	position: fixed;
	bottom:0;
	background-color: black;
	color: lightcyan;
	line-height: 3;
	text-align: center;
	width: 100%;
	font-size: 1em; 
}
