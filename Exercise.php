<html>
<head>

  <title>Student Grade Evaluator</title>
  <style>
  
    body {
      background-color: red;
    }
	
    .main-div {
		
		padding: 378px;
		text-align: center;
		background-color: orange;
		
    }
  </style>

</head>
<body>

  <div class = "main-div">
  <h1>Evaluate Students Grade</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  
    Student Number: <input type="integer" name="number"><br><br>
    Student Grade: <input type="integer" name="grade"><br><br>
	
    <input type="submit">
	
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // to collect the inputted values
      $number = $_REQUEST["number"];
      $grade = $_REQUEST["grade"];
      if ($grade >= 70) 
      {
        echo "Student Number: <b><br>".$number . "</b><br><br>Grade: <b>". $grade . "</b><br> <b>PASSED</b><br><br>";
      } 
      elseif (($grade >=60) && ($grade <=69))
      {
        echo "Student Number: <b><br>".$number . "</b><br><br>Grade: <b>".$grade . "</b><br> <b>REMEDIAL</b><br><br>";
      }
      else
      {
        echo "Student Number: <b><br>".$number . "</b><br><br>Grade: <b>".$grade . "</b><br> <b>FAILED</b><br><br>";
      }
    }
  ?>

</body>
</html>