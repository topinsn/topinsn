<?php
	require_once "header.php"; 
	include_once "intro.php"; 
?>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
	#projects_1{
/*		border: 0.1em solid red;*/
		min-height: 20em;
		min-width: 10em;
	}

	#projects_2{
/*		border: 0.1em solid yellowgreen;*/
		min-height: 20em !important;
		min-width: 10em !important;
	}

	#projects_3{
/*		border: 0.1em solid blue;*/
		min-height: 20em;
		min-width: 10em;
	}
</style>

<div class="container-fluid">
	<div class="col-md-12 d-flex justify-content-center">
		<h2>Portfolio</h2>
	</div>
	
	<div class="row d-flex justify-content-center">

		<div id="projects_1" class="col-md-3 me-1">
			<a href="https://healthcare.temidev.com.ng/"><embed src="https://healthcare.temidev.com.ng/" ></a>
		</div>

		<div id="projects_2" class="col-md-3 me-1">
			<a href="https://healthcare.temidev.com.ng/"><embed src="https://healthcare.temidev.com.ng/" ></a>
		</div>

		<div id="projects_3" class="col-md-3">
			<a href="https://healthcare.temidev.com.ng/"><embed src="https://healthcare.temidev.com.ng/" ></a>
		</div>
	</div>
</div>

<?php 
	require_once "footer.php";
?>
