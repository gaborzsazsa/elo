<?php
include("fnctns.php");
init_connect();
$query_data=get_vars();
if (get_login_data($query_data["username"], $query_data["password"])!="notfound") {
	echo "valid";
}
?>