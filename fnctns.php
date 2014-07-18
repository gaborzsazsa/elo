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
			echo $row["numusers"]."users in the system<br>";
	}
}

function get_login_data($username, $password) {
	$query="select * from users where name=\"".$username."\" and password=\"".$password."\"";
	$result=mysql_query($query);
	if (mysql_num_rows($result)!=0) {
									$row=mysql_fetch_assoc($result);
									return $row;
	}
	else {return "notfound";}
}

function get_vars() {
	if ($_SERVER["QUERY_STRING"] != null) {
	parse_str($_SERVER["QUERY_STRING"],$output);
	}
	else {$output="fail";}
	return $output;
}
?>

