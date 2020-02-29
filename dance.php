<html>
<body>
<form method ="POST" action="play4.php">
<!-- Play3 karo try -->
<?php
	echo "Songs";
	echo "<br/>";
	$conn=mysqli_connect('localhost','root','','musica');
	if(!$conn){
		die('server not connected');
	}
	$query = "select URL from songs where GenreID=201";

	$r = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($r)){
		echo '<button><a href="play.php?name='.$row['URL'].'">'.$row['URL'].'</a></button>';
		echo "<br/>";
	}
	mysqli_close($conn);

?>
</form>
</body>
</html>
