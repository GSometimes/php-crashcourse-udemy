
<?php

  session_start();



  ?>


  <htm>
  	<head></head>
  	<body>
  		<h3><?php 

  		echo $_SESSION['username'] . " age is " . $_SESSION['age'] ; ?>
  	</body>
  </htm>