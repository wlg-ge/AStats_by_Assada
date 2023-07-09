<?php
	if (!$count = filter_input(INPUT_GET, 'count', FILTER_VALIDATE_INT))
		$count = 15;
	$title = 'Top ' . $config['per_page'] . ': Create new widget';
	$stats = new CSstats($server[$server_id]['file_stats'], $count);
	foreach($_POST as $key => $value) $$key = $value;
	$width = (isset($width) and $width) ? $width : 250;
	$height = (isset($height) and $height) ? $height : "auto";
	$urlc = str_replace("index.php", "", $_SERVER["HTTP_HOST"].strtok($_SERVER["REQUEST_URI"], '?'));
	$code = '<!--AStats Widget--><script src="http://' . $urlc . 'js/widget.top.js"></script>
<script>get_stats(' . $count . ',' . $width . ',\'' . $height . '\',' . $server_id . ',\'' . $urlc . '\');</script>
<div id="monitor"></div><!--/AStats Widget-->';