<?php

function renderView($template,$data=[])
{
	 
	$filePath = APP_PATH . '/src/views/' . $template;
	if (is_readable($filePath)) {
		include($filePath);
	}
	 
}