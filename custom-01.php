<?php
$list = array(
  '牛' => '草',
  '鳩' => '豆',
  'コアラ' => 'ユーカリ'
);

$i = 0;
foreach ( $list as $key => $row ) {
  echo "$i : $row";
  echo "\n";
  $i++;
}
