<?php
function getData()
{
  return file('data.txt');
}

foreach ( getData() as $row ) {
  echo '.';
}
echo "\n";
echo memory_get_peak_usage();
echo " bytes.\n";