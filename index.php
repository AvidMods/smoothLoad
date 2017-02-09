<!DOCTYPE HTML>
<html>
	<head>
		<?php include('includes/css.php');
			  include('includes/js.php');
			  include('includes/userinfo.php');
			  include('config/smooth.php'); ?>
	</head>
<body>

	<div class="serverWrapper">
		<div class="dateTime">Date, Time</div>
	</div> <!-- END SERVER WRAPPER -->
	
	<div class="serverName">Default Server Name</div> <!-- END SERVER NAME -->
	
	<div class="serverInfo">
		<span class="serverInfoLabel">
			Server Information
		</span>
		<br>
		<p class="serverInfoContent">
			Gathering description information..
		</p>
	</div>
	<div class="serverInfo2">
		<div class="serverImage"><img style="background-size: cover;" class="serverImageimg"></div>
	</div>
	<div class="serverInfo3">
		<span class="status">
			Retrieving server info...
		</span>
	</div>
	
	<div class="serverRules">
		<div class="rulesTitle">Server Rules</div>
		<p>
			<span class="rule1"></span><br><br>
			<span class="rule2"></span><br><br>
			<span class="rule3"></span><br><br>
			<span class="rule4"></span><br><br>
			<span class="rule5"></span>
		</p>
	</div>
	
	<div class="user-content">
		<div class="user-avatar"><img src="<?php echo $avatar; ?>"</div>
		<div class="user-info"></div> <!-- Information bar, slides in -->
		<div class="user-info-actual">
			<span>Username: <i style="font-size: 14px;"><?php echo $name; ?></i></span>
			<span>Location: <i style="font-size: 14px;"><?php echo $locationB . ', ' . $location; ?></i></span>
		</div>
	</div> <!-- END USER CONTENT -->

</body>	
</html>