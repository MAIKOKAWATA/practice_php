<?php
$sanrio_characters = [
    "kitty","gudetama","pompompurin",
];
/**
 * キャラの名前で一番使われてるアルファベットとその数を算出
 * 1.配列の中から文字を一文字ずつ取り出す
 * 2.アルファベットごとにでる回数を算出
 * 3.一番
 * 
 */
$countMojis = [];

foreach ($sanrio_characters as $sanrio_character) {
    $length = strlen($sanrio_character);
    for ($i=0; $i<$length; $i++){
        $moji = substr($sanrio_character,$i,1);
        if (isset($countMojis[$moji])) {
            $countMojis[$moji]++;
        } else {
            $countMojis[$moji] = 1;
        }
    }
}
//var_dump($countMojis);exit;

$resultMoji = "";
$countMax = 0;
foreach ($countMojis as $countMoji => $count) {
    if ($countMax < $count) {
        $resultMoji = $countMoji;
        $countMax = $count;
    }
}

echo $resultMoji;//うまくいってない
//mb_　日本語対応