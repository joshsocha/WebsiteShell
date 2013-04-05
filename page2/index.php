<?php
include '../layout/head.php';
include '../layout/middle.php';
include '../layout/header.php';
include '../layout/footer.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
printHeader('Page2 Title');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<body>

<?php
printMyHeader('page2');
beginMiddle();
?>

<h2>Page 2</h2>
<p>Put your content here<p>

<?php
endMiddle();
printFooter();
?>

</body>
</html>
