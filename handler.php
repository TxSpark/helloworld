<?php
$connect = mysqli_connect('localhost', 'root','','forms') or die("connection error");
mysqli_query($connect, "INSERT INTO `table`(`name`, `email`) VALUES ('".$_POST["name"]."','".$_POST["email"]."')") or die("query error");