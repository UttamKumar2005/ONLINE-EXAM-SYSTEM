<?php
include_once("../lib/session.php");
session::checkAdminSession();
include_once("../lib/Database.php");
include_once("../helpers/Format.php");

$db = new Database();
$fm = new Format();

 ?>

<!doctype html>
<html>
<head>
	<title>Admin</title>
		<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="phpcoding">
	<section class="headeroption"></section>

  <?php
        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
          session::destroy();
          header("Location:login.php");
          exit();
        }

   ?>

		<section class="maincontent">
		<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="users.php">Manage user</a></li>
			<li><a href="quesadd.php">Add Ques</a></li>
			<li><a href="queslist.php">Ques List</a></li>
			<li><a href="?action=logout">Logout</a></li>
		</ul>
	 </div>
