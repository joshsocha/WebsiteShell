<?php
$pages = array(
	"home" => "Home",
	"page1" => "Page1",
	"page2" => "Page2",
	"page3" => "Page3",
	"blog" => "Blog"
);

function printMyHeader($current){
	global $pages;
	echo '<div id="headerWrapper">'.
		'<div id="header">'.
		'<span class="headerText" id="output">AlduinDev</span>'.
		'</div>';
	
	// Navigation bar
	echo '<ul id="nav">';
	foreach($pages as $key => $value){
		echo '<li><a ';
		if(isset($_GET['page']) && $key == $_GET['page']){
			echo 'class="current" ';
		}else if(!isset($_GET['page']) && $key == 'home'){
			echo 'class="current" ';
		}
		echo 'id="'.$key;
		echo '" href="#'.$key.'">'.$value.'</a></li>';
	}
	echo '</ul></div>';
	
	// Ajax that loads the middle content of the page for each of the
	// Different pages in the pages array
	echo "\n".'<script type="text/javascript">'."\n";
	echo  '$.ajaxSetup ({'."\n".
	'cache: false'."\n".
    	'});'."\n";
	echo 'var ajax_load = "";'."\n";
	foreach($pages as $key => $value){
		echo 'var '.$key.'loadUrl = "/'.$key.'/content.php";'."\n";
		echo '$("#'.$key.'").click(function(){'."\n".
		'$("#middle").html(ajax_load).load('.$key.'loadUrl);'."\n".
		'window.history.pushState("","'.$key.'", "#'.$key.'")'."\n".
    		'});'."\n";
	}

	// This updates the naviagation so that the current class moves to the porper
	// <a> tag.
	echo '$("ul li a").click(function() {'."\n".
	'var p = $(this).parents("ul");'."\n".
	'$("a", p).removeClass("current");'."\n".
	'$(this).addClass("current");'."\n".
	'return false;'."\n".
	'});'."\n";
	
	echo '</script>';
}
?>
