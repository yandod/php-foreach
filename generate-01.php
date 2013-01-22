<?php
function getData()
{
  yield "猪";
  yield "鹿";
  yield "蝶";
}

foreach ( getData() as $row ) {
  echo $row;
  echo "\n";
}