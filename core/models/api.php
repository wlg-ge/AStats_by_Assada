<?php
	$method = $_REQUEST['md'];
		$count = (int)$_REQUEST['c'];
		if($method == 'search') $name = $_REQUEST['name'];
		if(empty($count) || !isset($count)) $count = 0;
		$stats = new CSstats($server[$server_id]['file_stats'],$count);
		if($method == 'search') $stats = $stats->searchByNick($name);
	die(json_encode2($stats));
