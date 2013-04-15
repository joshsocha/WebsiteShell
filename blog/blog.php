<?php
//Connect to blog database
$mysqli = new mysqli("localhost", "blog", "password", "blog");

function &getNewestPosts($num){
	$query = "SELECT title,post FROM posts ORDER BY date DESC";
	return $msqli->query($query);
}

function &getPostsPage($num, $page){
	$query = "SELECT title,post FROM posts where  ORDER BY date DESC LIMIT ?, ?";
	$skip = $num * $page;
	global mysqli->bind_param('ii', $skip, $num);
	
}

?>
