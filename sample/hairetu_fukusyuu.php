<?php
//2018年12月21日　全部自力で組んでみた
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
    "4" => [ //=>はもうそう書く決まり。
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

$same_colors = [];
foreach ($sanrio_characters as $key=>$sanrio_character) {
    if ($key == 0){
        $same_colors = $sanrio_character["colors"];
    } else {
        $same_colors = my_array_intersect($sanrio_character["colors"], $same_colors);
    }
}

/**
 * 引数の配列の中身の値を比較し、
 * 共通する値を返す関数
 * @param array $arrays1,$arrays2
 * @return array[string] $answer_array
 */
function my_array_intersect($arrays1,$arrays2) {
    $answer_array = [];
    foreach ($arrays1 as $array1){
        foreach ($arrays2 as $array2){
            if ($array1 == $array2){
                $answer_array[] = $array1;
            }
        }
    }
    return $answer_array;
}

var_dump($same_colors);