<?php
include("fnctns.php");
init_connect();
$query_data=get_vars();
echo $query_data['username'];
?>