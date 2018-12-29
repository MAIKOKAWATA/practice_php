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
            //"white",//+
        ]
    ],
    "3" => [
        "name" => "marumofubiyori",
        "motif" => "polar_bear",
        "colors" => [
            "yellow",
            "light_blue",
            "black",
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
 *  1. 色をカウントする配列の箱を用意する
 *  2. サンリオ配列のループを回す
 *  3. キャラの色情報をとってくる
 *  4. カウント用の配列にすでに色のキーがあれば+1、なければキーを追加して数値1
 *  5. ループ終了後にカウント用の配列で一番数値の大きいものを取得
 *      5.1 カウント用の配列のループを回す
 *      5.2 前回のループと比較して現在の値が大きければ、そのキーを保持
 *  6. 一番数値の大きかった色のキーを出力
 */
$countColors = [];//1. 色をカウントする配列の箱を用意する
 foreach ($sanrio_characters as $sanrio_character) {//2. サンリオ配列のループを回す
     foreach ($sanrio_character["colors"] as $color) {//3. キャラの色情報をとってくる
            if (isset($countColors[$color])){
                $countColors[$color]++;
            } else {
                $countColors[$color] =1;
            }
     }
}
//var_dump($countColors);
/*
$resultColor = "";
$countMax = 0;
foreach ($countColors as $countColor => $count) {
    if ($countMax < $count) {
        $resultColor = $countColor;
        $countMax = $count;
    }
}
*/
$resultColor = [];
$countMax = 0;
//var_dump($countColors);exit;
foreach ($countColors as $countColor => $count) {
    if ($countMax < $count){
        $resultColor = [];
        $resultColor[] = $countColor;
        $countMax = $count;
    } elseif ($countMax == $count) {
        $resultColor[] = $countColor;
        $countMax = $count;
    }
}
print_r($resultColor);