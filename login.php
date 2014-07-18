<?php
function init_connect() {
	$link=mysql_connect('localhost', 'apache', '');
	if (!$link) {
			die('Could not connect: ' . mysql_error());
	}
	else {
			mysql_select_db("elo",$link);
			$query="select count(*) as numusers from users";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			echo $row["numusers"];
	}
}



init_connect();

?>

