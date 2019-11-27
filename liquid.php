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
  
  $toValue = convertLiquid($fromValue, $fromUnit, $toUnit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Volume</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Liquid</h1>
  
      <form action="liquid.php" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="fromUnit">
            <option value="bucket"<?php if($fromUnit == 'bucket') { echo " selected"; } ?>>bucket</option>
            <option value="butt"<?php if($fromUnit == 'butt') { echo " selected"; } ?>>butt</option>
            <option value="firkin"<?php if($fromUnit == 'firkin') { echo " selected"; } ?>>firkin</option>
            <option value="hogshead"<?php if($fromUnit == 'hogshead') { echo " selected"; } ?>>hogshead</option>
            <option value="pint"<?php if($fromUnit == 'pint') { echo " selected"; } ?>>pint</option>
            <option value="gallon"<?php if($fromUnit == 'gallon') { echo " selected"; } ?>>gallon</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="toUnit">
            <option value="bucket"<?php if($toUnit == 'bucket') { echo " selected"; } ?>>bucket</option>
            <option value="butt"<?php if($toUnit == 'butt') { echo " selected"; } ?>>butt</option>
            <option value="firkin"<?php if($toUnit == 'firkin') { echo " selected"; } ?>>firkin</option>
            <option value="hogshead"<?php if($toUnit == 'hogshead') { echo " selected"; } ?>>hogshead</option>
            <option value="pint"<?php if($toUnit == 'pint') { echo " selected"; } ?>>pint</option>
            <option value="gallon"<?php if($toUnit == 'gallon') { echo " selected"; } ?>>gallon</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
