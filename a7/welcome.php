<?php
	//
	session_name("customer");
	session_start("customer");
	
	// 
	if(!isset($_SESSION["customer"]))
	{
		header('Location: login.php');
		exit;
	}
?>

<!DOCTYPE html>

<!--
	Jordan Parra
	Assignment 7
	CIS-425
	Spring 2015
-->

<html lang="en">
    <head>
        <!-- Title -->
        <title>Parra Login Page</title>
        
        <!-- Meta tag -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="http://s11.postimg.org/43i77irgv/favicon.png" />
        
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="container">
            <!-- Header -->
    		<header class="page-header">
    			<h1>Assignment 7</h1>
    		</header>
    		
    		<div class="row">
    		    <!-- Sidebar -->
    		    <div class="col-md-2">
					<nav>
						<h4>Site Navigation</h4>
						<ul>
							<li><a href="../index.html">Home</a></li>
							<li><a href="../a2/index.html">A2</a></li>
							<li><a href="../a3/index.html">A3</a></li>
							<li><a href="../a4/index.html">A4</a></li>
							<li><a href="../a5/index.html">A5</a></li>
							<li><a href="../a6/index.html">A6</a></li>
							<li><a href="index.html">A7</a></li>
							<li><a href="#">A8</a></li>
							<li><a href="#">A9</a></li>
							<li><a href="#">Project</a></li>
						</ul>
					</nav>
    		    </div>
    		    
    		    <!-- Main Content -->
    		    <div class="col-md-8">
    		    	<div class="container-fluid">
    		    		<div class="row">
    		    			<div class="col-md-8 col-md-offset-2">
    		    				<div style="margin-top: 10px;" class="alert alert-success alert-dismissable" role="alert">
    		    					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		    						<span aria-hidden="true">&times;</span>
    		    					</button>
    		    					Login successful!
    		    				</div>
    		    				<h3 style="margin: 10px 0px 20px;">Welcome <?php echo $_SESSION["customer"] ?></h3>
    		    				<hr>
								<!--<p>Hello <?php echo $_SESSION["customer"] ?></p>-->
								<form action="logout.php">
									<button type="submit" class="btn btn-primary">Logout</button>
								</form>
							</div>
						</div>
					</div>
    		    </div>
    		    
    		    <!-- External Navigation -->
    		    <div class="col-md-2">
    		        <nav id="external-nav-links" class="pull-right">
						<h4>External Links</h4>
						<p><a href="https://github.com/"><img class="image-link image-thumbnail pull-right" src="../img/logo_github.png" alt="Link to github</github>" /></a></p>
						<p><a href="http://www.wolframalpha.com/"><img class="image-link image-thumbnail pull-right" src="../img/logo_wolphram_alpha.png" alt="Link to wolphram alpha" /></a></p>
						<p><a href="https://translate.google.com/"><img class="image-link image-thumbnail pull-right" src="../img/logo_google_translate.png" alt="Link to google translate" /></a></p>
					</nav>
    		    </div>
    		</div>
    		
    		<footer class="row">
    		    <div class="col-md-6">
    		        <p id="copyright">&copy;2014 Jordan Parra</p>
                </div>
    		    <div class="col-md-6">
    		        <div class="pull-right">
            		    <img class="html5-logo" src="../img/html5_icon.png" alt="html 5 icon" />
            			<a href="../email/emform.html"><img class="email-logo" src="../img/email_icon.png" alt="email icon" /></a>
            			<img class="css3-logo" src="../img/css3_icon.png" alt="css 3 icon" />
            		</div>
        		</div>
    		</footer>
    	</div>
    	
    	<!-- JQuery -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    	
    	<!-- Bootstrap JS -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    	
    	<!-- Custom JS --> 
    	<script src="../js/main.js"></script>
    </body>
</html>