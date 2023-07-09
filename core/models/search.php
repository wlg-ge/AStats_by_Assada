<?php
	if (!$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS))
		header("Location: index.php?id=$server_id");
	$title = 'Top ' . $config['per_page'] . ': Search result for ' . htmlentities($name);
	$stats = new CSstats($server[$server_id]['file_stats']);
	$stats = $stats->searchByNick($name);