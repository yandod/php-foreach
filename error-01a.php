<?php
$list = getCafe();
if (is_array($list)) {
  foreach ( $list as $row ) {
    echo $row;
  }
}

function getCafe() {
  return null;
}