<?php
$mysqli = new MySQLi("localhost", "blog", "password", "blog");
// Check Connection
if(mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
}

//Prepare what page and how many posts to display
$num = 10;
$page = 0;
if(isset($_GET['num'])){
        $num = $_GET['num'];
}
if(isset($_GET['page'])){
        $page = $_GET['page'];
}

$skip = $num * $page;
if($stmt = $mysqli->prepare("SELECT title,post,date FROM posts ORDER BY date DESC LIMIT ?, ?")){
        $stmt->bind_param('ii', $skip, $num);
        $stmt->bind_result($title,$post,$date);
        $stmt->execute();
        while($stmt->fetch()){
                echo '<h3>'.$title.' - '.$date.'</h3><br/>';
                echo '<p>'.$post.'</p><br/>';
        }
        //Free the result
        $stmt->close();
}
$mysqli->close();


?>

