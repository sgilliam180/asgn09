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

?>