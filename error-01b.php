<?php
$list = getCafe();
if ( !is_array($list) ) {
  $list = array();
}
foreach ( $list as $row ) {
  echo $row;
}
  
function getCafe() {
  return null;
}