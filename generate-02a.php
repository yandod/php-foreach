<?php
function getData()
{
  $fp = fopen('data.txt', 'r');
  while (($buffer = fgets($fp, 4096)) !== false) {
     yield $buffer;
  }
  fclose($fp);
}

foreach ( getData() as $row ) {
  echo '.';
}
echo "\n";
echo memory_get_peak_usage();
echo " bytes.\n";