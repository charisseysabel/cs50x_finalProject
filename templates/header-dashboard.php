<!DOCTYPE html>
<html>
	<head>

		<!-- various CSS files/libraries -->
		<link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>

        <!-- fonts -->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

        <!-- dashboard styles -->
        <link href="/css/dash_style.css" rel="stylesheet"/>
        
        <!-- inventory styles + datatables css-->
        <link href="/css/inv_style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">

        <!-- set the title dynamically through PHP -->
        <?php if(isset($title)): ?>
        	<title>CS50x: Balance | <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
        	<title>CS50x: Balance</title>
    	 <?php endif ?>

    	<!-- scripts + datatables-->
    	<script src="/js/jquery-1.11.1.js"></script>
    	<script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
              
        <!-- CASHFLOW TAB: chart.js by Nick Downie -->
        <script src="/js/Chart.js"></script>
        <script src="/js/Chart.min.js"></script>
        <script src="/js/cash_chart.js"></script>

	</head>

	<body onload="time(); date(); setInterval('time()', 1000)">

           		<div class="menu_panel">
           			<div id="menu">
		                <ul>
		                    <li><a href="dashboard.php"> Dashboard </a></li>
		                    <li><a href="cashflow.php"> Cashflow </a></li>
		                    <li><a href="inventory.php"> Inventory </a></li>
		                    <li><a href="transactions.php"> Transactions </a></li>

		                </ul>
                	</div>
                	
                	<div id="extra_options">
		                <ul>
		                    <li><a href="walkthrough.php"> Help </a></li>
		                    <li><a href="settings.php"> Settings </a></li>
		                    <li><a href="logout.php"> Logout </a></li>
		                </ul>
                	</div>
           		</div>
           		
           		<!-- dynamic content starts here -->
           		<div class="canvas">
           		
           		
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
            
            
            
            
            
            
