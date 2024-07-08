<?php
if(!$blocks || !is_array($blocks) || count($blocks) < 0) {
	return;
}

foreach ($blocks as $block) {
	$blockFilePath = get_template_directory() . '/parts/blocks/' . $block['acf_fc_layout'] . '.php';
	if(file_exists($blockFilePath)) {
		include $blockFilePath;
	}
}
