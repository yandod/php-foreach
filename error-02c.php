<?php
$list = array(
  new stdClass(),
  new stdClass(),
  new stdClass()
);
$list[0]->name = 'ごはん';
$list[1]->name = 'ナン';
$list[2]->name = '麺';

foreach ( $list as $key => $row ) {
  $row->name = 'チョコ';
}
var_dump($list);