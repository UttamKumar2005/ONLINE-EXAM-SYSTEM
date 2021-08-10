<?php include 'inc/header.php'; ?>

<?php
     Session::checkSession();
     $question = $exm->getQuestion();
     $total = $exm->getTotalRows();
 ?>
 <style>
   body{
     background-image: url("img.jpg");
     margin-top: 60px;
   }
 </style>

<div class="main">
<h1>Welcome to Online Exam </h1>
	   <div class="starttest">
       <h2>Test your Knowledge</h2>

       <ul>
           <li> <strong>Subject Name:</strong> DBMS</li>
           <li> <strong>Number of Question </strong><?php echo $total; ?></li>
           <li> <strong> Question Type </strong> Multiple Choice</li>
       </ul>
           <a href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>
     </div>

  </div>
<?php include 'inc/footer.php'; ?>
