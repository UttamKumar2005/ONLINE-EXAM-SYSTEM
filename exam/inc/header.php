<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
Session::init();
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');

spl_autoload_register(function($class){
	include_once "classes/" .$class. ".php";
});

$db = new Database();
$fm = new Format();
$usr = new User();
$exm = new Exam();
$pro = new process();
?>

<!doctype html>
<html>
<head>
	<title>Online Exam System</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>

	  <?php
	        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
	          session::destroy();
	          header("Location:index.php");
	          exit();
	        }
	   ?>


<div class="phpcoding">
	<section class="headeroption"></section>
		<section class="maincontent">
		<div class="menu">
		<ul>
		   	<?php
           $login = Session::get("login");
					 if ($login == true) {
				  ?>

			  <li><a href="profile.php">Profile</a></li>
				<li><a href="exam.php">Exam</a></li>
				<li><a href="?action=logout">Logout</a></li>
    <?php  }else { ?>
	  		<li><a href="index.php">Login</a></li>
		  	<li><a href="register.php">Register</a></li>
    <?php } ?>

		</ul>

		<?php
			 $login = Session::get("login");
			 if ($login == true) {
			?>

		<span style="float: right;color: #888;">
    Welcome <strong><?php echo Session::get("name"); ?></strong></span>
		<?php } ?>
		</div>
