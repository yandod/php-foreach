<?php
$list = array(
  '牛' => '草',
  '鳩' => '豆',
  'コアラ' => 'ユーカリ'
);

foreach ( $list as $key => $row ) {
  if ( mb_strlen($row) < 4 ) {
    continue;
  }
  echo $row;
  echo "\n";
}
