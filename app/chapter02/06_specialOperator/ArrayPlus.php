<?php

$a = ['a' => 'りんご', 'b' => 'バナナ'];
$b = ['a' => '洋ナシ', 'b' => 'いちご', 'c' => 'さくらんぼ'];

$c = $a + $b;

var_export($c);
/* 結果：
array (
  'a' => 'りんご',
  'b' => 'バナナ',
  'c' => 'さくらんぼ',
)
*/