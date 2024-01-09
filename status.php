<?php
include('all_article.blade.php');

$id=$_GET['id'];
$status=$_GET['status'];
$q="update archive1 set status=$status where id=$id";

mysqli_query($con,$q);

header ('location:all_article.blade.php');
?>