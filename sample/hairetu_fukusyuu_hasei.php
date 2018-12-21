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

/**
 * サンリオの配列データをつかって、一番使われている色が多いものを算出する
 * 1. 色の情報を取り出す
 * 2. 色の情報を一つの配列にぶっこむ
 * 2. 色の情報が出るたびにカウントする
 * 3. カウントした値の大きい色を返す
 */

$lineupColors = [];
foreach ($sanrio_characters as $sanrio_character) {//1.2.
    $lineupColors[] = $sanrio_character["colors"];
}
var_dump($lineupColors);

$count = 0;
foreach ($lineupColors as $lineupColor) {
    if($count == 0){
        $count["$lineupColor"] = 1;
    } else {
        $count["$lineupColor"]++;
    }
}

/**
 * キャラの名前で一番使われてるアルファベットとその数を算出
 */