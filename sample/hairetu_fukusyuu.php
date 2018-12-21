<?php
//2018年12月21日　全部自力で組んでみた
/**
 * Gunsan's Review
 * lint 規約に沿ってるかのチェック.ほかの言語でもある概念
 * ①｀if ($key == 0){｀ とか ｀foreach ($arrays1 as $array1){｀ とかがダメ。
 * ｀{｀ の前はスペースをあけて、 ｀) {｀ としましょう。
 * ------------------------------------------------------------------------
 * ②phpcsってのを導入するとPSR-2の規約に沿ってるかチェックしてくれるみたいです。
 * 僕が評価するより、phpcsに評価してもらうほうが確実です。
 * ------------------------------------------------------------------------
 * ③｀foreach ($sanrio_characters as $key=>$sanrio_character) {｀
 * は
 * ｀foreach ($sanrio_characters as $key => $sanrio_character) {｀
 * ------------------------------------------------------------------------
 * ④アノテーションは一目で引数の型、返り値の型がわかることが目的です。
 * 引数の配列の中身の値を比較し、
 * 共通する値を返す関数
 * @param array $arrays1,$arrays2
 * @return array[string] $answer_array
 * ↓
 * 引数の配列の中身の値を比較し、
 * 共通する値を返す関数
 *
 * @param array $arrays1
 * @param array $arrays2
 * @return array
 * 
 * 返る配列の中身をご丁寧に教えてあげるなら、
 * 引数の配列の中身の値を比較し、
 * 共通する値を返す関数
 *
 * @param array $arrays1
 * @param array $arrays2
 * @return array ([string, string, ...])
 * とか書けなくないですが、この関数だと、実際 ｀string｀ であるとは限りません。
 * なので書かないほうが良いです。
 * ------------------------------------------------------------------------
 * ⑤あと、コードがyoutuberのときとほぼ同じで、
 * サンリオキャラクタに置き換わっただけなので、
 * もう少し自分なりの派生を加えてコードが書けるようになると良いと思います。
 * この例で何を習ったかと言うと、studyに書いたと思うんですが、「配列をループ回して処理する」ということです。
 * 配列の中身を比較する方法だけを教えたかったわけではありません。
 * なので、「配列をループ回して処理する」っていう考えを使ってなにかコードは書けないかな？って考えてほしいです。
 */
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