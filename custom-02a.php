<?php
$list = array(
  '牛' => '草',
  '鳩' => '豆',
  'コアラ' => 'ユーカリ'
);

foreach ( $list as $key => $row ) {
  if ( mb_strlen($row) < 4 ) {
    echo "STOP!";
    echo "\n";
    break;
  }
  echo $row;
  echo "\n";
}
