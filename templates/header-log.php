<!DOCTYPE html>
<html>
	<head>
	    <!-- header-log.php
	        header files for login/register pages
	        adapted from twitter bootstrap's jumbotron theme
	     -->
	    
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    	<meta name="description" content="">
    	<meta name="author" content=""> 
	
		<!-- various libraries -->
		<link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>

        <!-- CSS -->
        <link href="/css/log.css" rel="stylesheet"/>

        <!-- fonts -->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    	<!-- scripts -->
    	<script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <?php if (isset($title)): ?>
            <title>CS50x Balance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CS50x Balance</title>
        <?php endif ?>

	</head>

	<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">B A L A N C E</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul>
          	<li><a href="/">Home</a></li>
          	<li><a href="login.php">Sign In</a></li>
          	<li><a href="register.php">Register</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div> <!-- container collapse -->
    </nav>
            
   <div id="middle">         
            
            
            
            
            
            
            
        
