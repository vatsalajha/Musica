<?php
	echo "Songs";
	echo "<br/>";
	$conn=mysqli_connect('localhost','root','','musica');
	if(!$conn){
		die('server not connected');
	}
	$query = "select URL from songs where GenreID=206";

	$r = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($r)){
		echo '<a href="play.php?name='.$row['URL'].'">'.$row['URL'].'</a>';
		echo "<br/>";
	}
	mysqli_close($conn);

?>
