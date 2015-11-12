<!DOCTYPE html>
<html>
	<head>

		<!-- various CSS files/libraries -->
		<link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

        <!-- set the title dynamically through PHP -->
        <?php if(isset($title)): ?>
        	<title>CS50x: Balance | <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
        	<title>CS50x: Balance</title>
    	<?php endif ?>

    	<!-- scripts -->
    	<script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

	</head>

	<body>

        <div id="dash_menu">
            <ul>
                <li>Dashboard</li>
                <li>Transactions</li>
                <li>Calendar</li>
                <li>Cashflow</li>
                <li>Settings</li>
            </ul>
        </div>

        <div id="options">
            <ul>
                <li>Settings</li>
                <li>Logout</li>
            </ul>
        </div>
