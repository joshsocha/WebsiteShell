<?php
$pages = array(
	"home" => "Home",
	"page1" => "Page1",
	"page2" => "Page2",
	"page3" => "Page3"
);

function printMyHeader($current){
	global $pages;
	echo '<div id="headerWrapper">'.
		'<div id="header">'.
		'<span class="headerText">AlduinDev</span>'.
		'</div>';

	echo '<ul id="nav">';
	foreach($pages as $key => $value){
		echo '<li><a';
		if($key == $current){
			echo ' id="current"';
		}
		echo ' href="/';
		if($key !== 'home'){
			echo $key;
		}
		echo '">'.$value.'</a></li>';
	}
	echo '</ul></div>';
}
?>
