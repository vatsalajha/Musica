<?php

  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

include_once "ez_sql_core.php";
include_once "ez_sql_mysql.php";
$db = new ezSQL_mysql('root','','amr','localhost');

$song = $db->get_row("SELECT * FROM tracks ORDER BY RAND() LIMIT 1");

$artist = $song->album_id;
$songname = $song->name;
$track_url = $song->track_url;
$separator = '|';
echo $track_url.$separator.$artist.$separator.$songname;
}

?>
