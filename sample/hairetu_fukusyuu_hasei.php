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
 * 3. 使う色数がもっとも多いものを算出する
 * 4. キャラ名を返す
 */

$lineupColors = [];
foreach ($sanrio_characters as $key => $sanrio_character) {
//    $countColors[] = array_count_values($sanrio_character["colors"]);    
    $countColors[] = count($sanrio_character["colors"]);    //1,2
    $maxCount = max($countColors);                          //3
}

/*
foreach ($countColors as $countcolor) {
    $maxCount = max($countColor);
}
*/
echo "\n-------------------------\n";
var_dump($countColors);
echo "\n-------------------------\n";
var_dump($maxCount);
echo "\n-------------------------\n";
//var_dump($key["3"]);
exit;


foreach ($countColors as $key => $countColor) {

}


/**
 * キャラの名前で一番使われてるアルファベットとその数を算出
 */