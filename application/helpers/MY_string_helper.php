<?php

function sanitize($arr) {
  foreach ($arr as $key=>$value){
    $arr[$key] = quotes_to_entities($value);
  }
  return $arr;
}
