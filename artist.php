<html>
<body>
<?php
	echo "Songs";
	echo "<br>";
	$conn=mysqli_connect('localhost','root','','musica');
	if(!$conn){
		die('server not connected');
	}
	$Artist=$_POST['Artist'];
	$query = "select URL from songs where ArtistID=$Artist";
	$r = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($r)){
		echo '<a href="play.php?name='.$row['URL'].''.$row['URL'].'</a>';
		$query = "update frequency as F set F.Coun = F.Coun + 1 where F.SongID = (Select S.SongID from songs As S, Users AS U where S.SongID = F.SongID and U.UserID = 1 and U.UserID = F.UserID and S.URL = '".$row['URL']."')";
		mysqli_query($conn,$query);
		echo "<br>";
	}
	mysqli_close($conn);
?>
</body>
</html>
