<h2>My Blog</h2>
<div id="blogControll">
<select id="num">
	<option value="5">5</option>
	<option value="10">10</option>
	<option value="20">20</option>
	<option value="30">30</option>
</select>
</div>
<br/>
<div id="blogPosts">
</div>

<script type="text/javascript">
$.ajaxSetup ({
	cache: false
});
var ajax_load = "";
var page = 0;
var num = 5;
if(Number(getUrlVars()['page'])){
	page = getUrlVars()['page'];
}
if(Number(getUrlVars()['num'])){
        num = getUrlVars()['num'];
}
$("#blogPosts").html(ajax_load).load("/blog/posts.php", "page=" + page + "&num=" + num);
$("#page").change(function(){
	page = $(this).val();
	$("#blogPosts").html(ajax_load).load("/blog/posts.php", "page=" + page + "&num=" + num);
});
$("#num").change(function(){
	num = $(this).val();
	$("#blogPosts").html(ajax_load).load("/blog/posts.php", "page=" + page + "&num=" + num);
});

</script>
