<?php
include './layout/head.php';
include './layout/middle.php';
include './layout/header.php';
include './layout/footer.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
printHeader('AlduinDev');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<body>

<?php
printMyHeader('home');
beginMiddle();
if(isset($_GET['page'])){
	include './'.$_GET['page'].'/content.php';
}else{
	include './home/content.php';
}
?>
<?php
endMiddle();
printFooter();
?>
<script type="text/javascript">
$(function(){

  // Bind the event.
$(window).hashchange( function(){
	// Every time has changes the page tires to load the correct
	//content with ajax
	$("a").removeClass("current");
	var currHash = location.hash.substring(1);
	if(currHash == ""){
		$("#middle").html(ajax_load).load("/home/content.php");
		$("#home").addClass("current");
	}else{
		$("#middle").html(ajax_load).load("/" + currHash + "/content.php");
		$("#" + location.hash.substring(1) ).addClass("current");
	}
  })

  // Trigger the event (useful on page load).
  $(window).hashchange();

});
</script>
</body>
</html>
