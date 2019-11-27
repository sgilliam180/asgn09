<?php
  
const LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS = array(
  "bucket" => 4,
  "butt" => 108,
  "firkin" => 9,
  "hogshead" => 54,
  "pint" => 0.125,
  "gallon" => 1
);

function convertToGallons($value, $fromUnit) {
  if(array_key_exists($fromUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value * LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$fromUnit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convertFromGallons($value, $toUnit) {
  if(array_key_exists($toUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value / LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$toUnit];
  } else {
    return "Unsupported unit.";
  }
}

function convertLiquid($value, $fromUnit, $toUnit) {
  $gallonValue = convertToGallons($value, $fromUnit);
  $newValue = convertFromGallons($gallonValue, $toUnit);
  return $newValue;
}

const LENGTH_MEASUREMENT_TO_IRISH_LENGTH = array(
  "grain" => .7,
  "thumb-length" => 2.1,
  "palm" => 3.3,
  "fist" => 10.4,
  "foot" => 25,
  "step" => 62.5,
  "double-step" => 1500,
  "rod" => 3000
);

function convertToCentimeters($value, $fromUnit) {
  if(array_key_exists($fromUnit, LENGTH_MEASUREMENT_TO_IRISH_LENGTH)) {
    return $value * LENGTH_MEASUREMENT_TO_IRISH_LENGTH[$fromUnit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convertFromCentimeters($value, $toUnit) {
  if(array_key_exists($toUnit, LENGTH_MEASUREMENT_TO_IRISH_LENGTH)) {
    return $value / LENGTH_MEASUREMENT_TO_IRISH_LENGTH[$toUnit];
  } else {
    return "Unsupported unit.";
  }
}

function convertIrishLength($value, $fromUnit, $toUnit) {
  $centimeterValue = convertToCentimeters($value, $fromUnit);
  $newValue = convertFromCentimeters($centimeterValue, $toUnit);
  return $newValue;
}

?>