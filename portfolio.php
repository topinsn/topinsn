<?php
	require_once "header.php"; 
	include_once "intro.php"; 
?>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
	/* #projects_1{ */
/*		border: 0.1em solid red;*/
		/* height: 20em; */
		/* min-width: 10em; */
	/* } */

	/* #projects_2{ */
/*		border: 0.1em solid yellowgreen;*/
		/* height: 20em !important; */
		/* min-width: 10em; */
	/* } */

	/* #projects_3{ */
/*		border: 0.1em solid blue;*/
		/* min-height: 20em; */
		/* min-width: 10em; */
	/* } */ 
</style>

<div class="container-fluid">
	<div class="col-md-12 d-flex justify-content-center">
		<h2>Portfolio</h2>
	</div>
	<div class="row d-flex justify-content-center">
            <div class="col-md-3 ps-3 pe-3 pt-3 first">
				<a href="https://wedding.temidev.com.ng/" target="_blank">
                    <img src="images/wedding_website.png" alt="link to healthcare web page" class="img-fluid img-thumbnail">
				</a>
                <p class="text-center ">This website is made of HTML, CSS, PHP</p>
            </div>
            <div class="col-md-3 ps-3 pe-3 pt-3 second">
				<a href="https://healthcare.temidev.com.ng/" target="_blank">
                	<img src="images/healthcare_webpage.png" alt="link to healthcare web page" class="img-fluid img-thumbnail">
				</a>
                <p class="text-center">This website is built using HTML, CSS, javascript, PHP, MySQL for RDBS</p>
            </div>
            <div class="col-md-3 ps-3 pe-3 pt-3 third">
				<a href="https://healthcare.temidev.com.ng/" target="_blank">
                	<img src="images/healthcare_webpage.png" alt="link to healthcare web page" class="img-fluid img-thumbnail">
				</a>
                <p class="text-center">This website is built using HTML, CSS, javascript, PHP, MySQL for RDBS</p>
            </div>
        </div>
</div>

<?php 
	require_once "footer.php";
?>
