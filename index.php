<?php
  if(isset($_POST['weight']) && isset($_POST['height'])) {
    $weight = (int)$_POST['weight'];

    $height = (int)$_POST['height'];
    $height = $height/100;
    $height = $height * $height;
    
    $BMI = $weight/$height;
    $BMI = number_format($BMI, 2, '.', '');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>BMI calculator</title>
  </head>
  <body>
    <form action="" method="post" name="bmi">
      <label for="weight">Enter your weight in kg:</label>
      <input type="number" id="weight" name="weight" value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : '' ?>" required />
      <label for="height">Enter your height in cm:</label>
      <input type="number" id="height" name="height" value="<?php echo isset($_POST['height']) ? $_POST['height'] : '' ?>" required />
      <input type="submit" value="Submit">
    </form>
    <?php echo isset($BMI) ? '<p>Your BMI is: '.$BMI.'</p>' : ''; ?>
  </body>
</html>

<?php $_POST = array(); ?>