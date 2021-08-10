<?php include 'inc/header.php'; ?>

<?php
     Session::checkSession();
 ?>

 <style>
   body{
     background-image: url("img.jpg");
     margin-top: 60px;
   }
 </style>

<div class="main">
<h1> You are done</h1>
<div class="starttest">
  <p>Congrats ! You have just completed the test. </p>
  <p>Final Score :
         <?php
        if(isset($_SESSION['score'])) {
          echo $_SESSION['score'];
          unset($_SESSION['Score']);
        }
         ?>

   </p>

  <a href="viewans.php"> View Answer</a>
  <a href="starttest.php"> Start Again</a>

</div>


  </div>
<?php include 'inc/footer.php'; ?>
