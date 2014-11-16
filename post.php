<?php
$homeSubmit = $_POST['home'];
$aboutSubmit = $_POST['about'];

if (~strcmp($homeSubmit, 'home')) {
	$title = $_POST['title'];
	$text = $_POST['content'];
	$data = array('main' => $title, 'sub' => $text);
	$json = fopen("home.json", "w");
	fwrite($json, json_encode($data));
	fclose($json);
	echo "done!";
	header("location:edit.html");
}

?>