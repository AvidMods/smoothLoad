<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Advent+Pro' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>

	body {
		font-family: 'Advent Pro', sans-serif;
		background-size: cover;
		background-attachment: fixed;
		margin: 0;
	}
	
	.serverName {
		width: 100%;
		font-size: 24px;
		color: #FFFFFF;
		text-align: center;
	}
	
	.serverWrapper {
		position: fixed;
		background-color: #000000;
		width: 100%;
		opacity: 0.5;
		height: 40px;
		z-index: -1;
	}
	
	.serverInfo {
		position: absolute;
		left: -600px;
		top: 50%;
		margin-top: -100px;
		width: 400px;
		height: 200px;
		background-color: #000000;
		opacity: 0.7;
	}
	
	.serverInfoLabel {
		margin-left: 5px;
		margin-top: 5px;
		font-size: 18px;
		color: #FFFFFF;
	}
	
	.serverInfoContent {
		margin-left: 10px;
		width: 380px;
		height: 165px;
		color: #FFFFFF;
		opacity: 0.5;
		overflow: hidden;
	}
	
	.serverInfo2 {
		position: absolute;
		left: -200px;
		top: 50%;
		margin-top: -100px;
		width: 200px;
		height: 200px;
		background-color: #000000;
		opacity: 0.7;
	}
	
	.serverInfo2 .serverImage img {
		position: absolute;
		width: 190px;
		height: 190px;
		left: 5px;
		top: 5px;
	}
	
	.serverInfo3 {
		position: absolute;
		left: -610px;
		top: 70.5%;
		margin-top: -25px;
		width: 610px;
		height: 50px;
		background-color: #000000;
		opacity: 0.7;
	}
	
	.serverInfo3 span {
		position: absolute;
		top: 50%;
		margin-top: -12.5px;
		width: 610px;
		height: 50px;
		font-size: 18px;
		text-align: center;
		color: #FFFFFF;
	}
	
	.serverRules {
		position: absolute;
		height: 400px;
		width: 300px;
		top: -400px;
		right: 50px;
		margin-top: -200px;
		background-color: #000000;
		opacity: 0.7;
		overflow: hidden;
	}
	
	.serverRules p {
		color: #FFFFFF;
		opacity: 0.7;
		margin-left: 10px;
		margin-right: 5px;
		font-size: 18px;
	}
	
	.rulesTitle {
		color: #FFFFFF;
		font-size: 24px;
		margin-left: 5px;
	}
	
	.user-content {
		position: absolute;
		top: -200px;
		left: 5%;
	}
	
	.user-avatar {
		border-radius: 50px;
		height: 100px;
		width: 100px;
		background-color: #FFFFFF;
	}
	
	.user-avatar img {
		position: absolute;
		margin-left: 1px;
		margin-top: 1px;
		width: 98px;
		height: 98px;
		border-radius: 50px;
	}
	
	.user-info {
		position: absolute;
		background-color: #000000;
		top: 50%;
		margin-top: -2.5px;
		left: 25px;
		height: 5px;
		border-radius: 5px;
		z-index: -1;
		opacity: 0.7;
	}
	
	.user-info-actual {
		position: absolute;
		top: 50%;
		margin-top: -25px;
		left: 25px;
		height: 60px;
		width: 350px;
		overflow: hidden;
	}
	
	.user-info-actual span {
		font-size: 16px;
		color: #FFFFFF;
		margin-left: 30%;
		letter-spacing: 2px;
	}
	
	.dateTime {
		font-size: 12px;
		color: #FFFFFF;
		margin-top: 0.75%;
		margin-left: 0.75%;
	}
	
</style>