<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>

<style>
  body{
    background-image: url("img.jpg");
    margin-top: 60px;
  }
  .adminpanel{width: 500px; color: #999;margin: 30px auto 0;}
</style>

<div class="main">
<h1>Admin Panel</h1>

<div class="adminpanel">
  <h2> Welcome to Control Admin Panel </h2>
  <p> You can manage your user and online exam system from here. </p>

</div>

</div>
<?php include 'inc/footer.php'; ?>
