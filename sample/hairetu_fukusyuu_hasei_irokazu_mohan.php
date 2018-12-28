<?php
$sanrio_characters = [
    "0" => [
        "name" => "mimmy",
        "motif" => "cat",
        "colors" => [
            "yellow",
            "black",
            "white",
            "light_blue",
        ]
    ],
    "1" => [
        "name" => "gudetama",
        "motif" => "egg",
        "colors" => [
            "yellow",
            "white",
            "black",
            "gray",
        ]
    ],
    "2" => [
        "name" => "pompompurin",
        "motif" => "dog",
        "colors" => [
            "yellow",
            "brown",
        ]
    ],
    "3" => [
        "name" => "marumofubiyori",
        "motif" => "polar_bear",
        "colors" => [
            "yellow",
            "light_blue",
            "brack",
            "light_pink",
            "white",
        ]
    ],
    "4" => [
        "name" => "mymelody",
        "motif" => "rabbit",
        "colors" => [
            "pink",
            "black",
            "white",
            "yellow",
        ]
    ],
];

$useColors = [];//使用する色をいれる配列を用意する
foreach ($sanrio_characters as $sanrio_character) {
    foreach ($sanrio_character["colors"] as $color) {
        $useColors[] = $color;//配列に使用する色を入れていく
    }
}
//使用する色の色名と出現回数を配列に入れる↓
$countColors = array_count_values($useColors);
//var_dump($countColors);exit;

//$countColors = ["yellow"=>5,"black"=>8,"white"=>1];

$resultColor = "";//結果を入れる変数を用意する
$countMax = 0;//カウントの最大値を0にしておく
foreach ($countColors as $color => $count) {
    if ($countMax < $count) {
        $resultColor = $color;//マックス値よりも色のカウント数のほうが大きい場合に
        $countMax = $count;//結果として返す色名とカウントのマックス値を置き換える
    }
}
echo $resultColor;//色名を返す