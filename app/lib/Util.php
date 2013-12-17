<?php

if (!function_exists('render_json')) 
{
	function render_json($data)
	{
		header("Content-Type: application/json");
		echo json_encode($data);
		exit;
	}
}

?>
