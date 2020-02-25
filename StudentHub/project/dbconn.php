<?php
session_start();
$server="localhost";
$username="root";
$psw="root";
$db="codeathon";
$connect=mysqli_connect($server,$username,$psw,$db);
if(!$connect)
{
	echo "Error in connecting to Database";
}
?>