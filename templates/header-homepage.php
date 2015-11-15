<!DOCTYPE html>
<html>
	<head>

		<!-- various libraries -->
		<link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>

        <!-- CSS -->
        <link href="/css/homepage.css" rel="stylesheet"/>

        <!-- fonts -->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

        <!-- set the title dynamically through PHP -->
        <?php if(isset($title)): ?>
        	<title>CS50x: Balance | <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
        	<title>CS50x: Balance</title>
    	<?php endif ?>

    	<!-- scripts -->
    	<script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/jquery.leanModal.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

	</head>

	<body>



<!-- warning: do not close the document here. (</body>, </html>)
    closing tags are included in footer.php via home.php-->
