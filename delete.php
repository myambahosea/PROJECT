<?php
/*Including connection file*/
include("connect.php");
/*Getting rid from previous page*/
$regid=$_REQUEST['regid'];
/*SQL query of delete*/
$qry="delete from reg where regid='$regid'";
/*Executing SQL query*/
$sql=mysqli_query($con,$qry);

if($sql)
/*calling display page*/
header("location:viewdel.php");
?>