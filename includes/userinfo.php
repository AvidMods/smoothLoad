<?php

	if(isset($_GET["steamid"])) {
		$id = $_GET["steamid"];	
	}
	else
		$id = '76561198051906410';
	
	$name = "Username";
	$avatar = "images/simple.png";
	$location = "N/A";
	$locationB = "N/A";
	$plydata = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=BEE6488A04F1506A9EE8440DB3667C36&steamids='.$id."&format=json";
	$f = file_get_contents($plydata);
	$array = json_decode($f, true);
	if (isset($array['response']['players'][0]['personaname']))
		$name = $array['response']['players'][0]['personaname'];
		
	if (isset($array['response']['players'][0]['avatarfull']))
		$avatar = $array['response']['players'][0]['avatarfull'];
	
	if(isset($array['response']['players'][0]['loccountrycode']))
		$location = $array['response']['players'][0]['loccountrycode'];
	
	if(isset($array['response']['players'][0]['locstatecode']))
		$locationB = $array['response']['players'][0]['locstatecode']

?>