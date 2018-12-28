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
 *  1. 色をカウントする配列の箱を用意する
 *  2. サンリオ配列のループを回す
 *  3. キャラの色情報をとってくる
 *  4. カウント用の配列にすでに色のキーがあれば+1、なければキーを追加して数値1
 *  5. ループ終了後にカウント用の配列で一番数値の大きいものを取得
 *      5.1 カウント用の配列のループを回す
 *      5.2 前回のループと比較して現在の値が大きければ、そのキーを保持
 *  6. 一番数値の大きかった色のキーを出力
 */

/**
 * 1. 色をカウントする配列の箱を用意する - OK
 */

//$countColors = [];

/**
 * 2. サンリオ配列のループを回す - OK
 */

//$countColors = [];
//foreach ($sanrio_characters as $sanrio_character) {

//}

/**
 * 3. キャラの色情報をとってくる - OK
 */

//$countColors = [];
//foreach ($sanrio_characters as $sanrio_character) {
//    $charaColors[] = $sanrio_character["colors"];
//}

/**
 * 4. カウント用の配列にすでに色のキーがあれば+1、なければキーを追加して数値1
 */
$countColors = [];
foreach ($sanrio_characters as $key => $sanrio_character) {
    $charaColors[] = $sanrio_character["colors"];
    if (array_key_exists($key , $countColors) != TRUE) {
        echo "TRUEじゃないよ！(比べて同じものがない)\n";

    }
}
/*foreach ($sanrio_characters as $keysanrio => $sanrio_character) {
    $charaColors[] = $sanrio_character["colors"];
    //foreach ($countColors as $charaColors[$keycolor] => $countColor) {
        if (array_key_exists ( $keysanrio , $charaColors) != TRUE){
            $countColors[$keycolor] = $charaColors;
            $countColors[$countColor] = 1;
        }// else {
    //            $countColor[] = 1++;   
    //        }
    //}
    
}*/
/*
var_dump($charaColors);
echo "\n-------------------\n";
var_dump($countColors);
*/