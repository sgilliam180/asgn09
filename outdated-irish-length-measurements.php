<?php

require_once('includes/functions.php');

$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if(!isset($_POST['submit'])) {
  $_POST['submit'] = '';
}

if($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convertIrishLength($fromValue, $fromUnit, $toUnit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Irish Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Irish Length</h1>
  
      <form action="outdated-irish-length-measurements.php" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="fromUnit">
            <option value="grain"<?php if($fromUnit == 'grain') { echo " selected"; } ?>>grain</option>
            <option value="thumb-length"<?php if($fromUnit == 'thumb-length') { echo " selected"; } ?>>thumb-length</option>
            <option value="palm"<?php if($fromUnit == 'palm') { echo " selected"; } ?>>palm</option>
            <option value="fist"<?php if($fromUnit == 'fist') { echo " selected"; } ?>>fist</option>
            <option value="foot"<?php if($fromUnit == 'foot') { echo " selected"; } ?>>foot</option>
            <option value="step"<?php if($fromUnit == 'step') { echo " selected"; } ?>>step</option>
            <option value="double-step"<?php if($fromUnit == 'double-step') { echo " selected"; } ?>>double-step</option>
            <option value="rod"<?php if($fromUnit == 'rod') { echo " selected"; } ?>>rod</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="toUnit">
            <option value="grain"<?php if($toUnit == 'grain') { echo " selected"; } ?>>grain</option>
            <option value="thumb-length"<?php if($toUnit == 'thumb-length') { echo " selected"; } ?>>thumb-length</option>
            <option value="palm"<?php if($toUnit == 'palm') { echo " selected"; } ?>>palm</option>
            <option value="fist"<?php if($toUnit == 'fist') { echo " selected"; } ?>>fist</option>
            <option value="foot"<?php if($toUnit == 'foot') { echo " selected"; } ?>>foot</option>
            <option value="step"<?php if($toUnit == 'step') { echo " selected"; } ?>>step</option>
            <option value="double-step"<?php if($toUnit == 'double-step') { echo " selected"; } ?>>double-step</option>
            <option value="rod"<?php if($toUnit == 'rod') { echo " selected"; } ?>>rod</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
