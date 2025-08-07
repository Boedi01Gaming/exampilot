<?php
require "includes/header.php";
include "includes/nav.php";
?>

<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
			<a href="./"><img src="assets/images/logo-white-2.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="error-page">
					<h3 class="error-title"><?php echo $title; ?> App</h3>
					<h5>Empower Your Learning.</h5>
					<p>Join thousands of students advancing their careers online.</p>
					<div class="">
						<a href="./" class="btn m-r5">Preview</a>
						<a href="./" class="btn outline black">Back To Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <?php include "includes/footer-section.php"; ?>

<?php
require "includes/footer-error.php";
?>