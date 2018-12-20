<?php
//https://www.sejuku.net/blog/22195#foreach
//https://maku77.github.io/memo/god-class.ht


$youtubers = [
    "0" => [
        "name" => "mushimegane",
        "age" => 26,
        "belongs" => [
            "uuum",
            "toukaionair",
            "origin_genesisone",
            "mizutamarionair",
            "rikei",
        ]
    ],
    "1" => [
        "name" => "tommy",
        "age" => 25,
        "belongs" => [
            "uuum",
            "mizutamaribond",
            "mizutamarionair",
            "bunkei",
            ]
    ],
    "2" => [
        "name" =>"watanabemahoto",
        "age" => 26,
        "belongs" => [
            "uuum",
            "origin_nakamaya",
            "origin_genesisone",
            ]//0-2で共通項はuuumのみ
    ],
    "3" => [
        "name" =>"takeyakisyo",
        "age" => 26,
        "belongs" => [
            "uuum",
            "origin_genesisone",        
        ]
    ],//タケヤキさん足しても、答えはuuumのみ
];
/** ------------------------------------------------------
 * 1 .「全員の情報から、各人の所属情報(belongs)だけ取ってくる」をやってみる
 * -------------------------------------------------------
 */
/*
$belongs=[];
 foreach($youtubers as $key=>$youtuber){
    $belongs[] = $youtuber["belongs"];
}

//var_dump($belongs);exit;
*/
/** -------------------------------------------------------
 * 2. 「1人目の所属情報を$same_belongsにいれる」をやってみる
 * --------------------------------------------------------
 */
/*
$same_belongs = [];
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs = $youtuber["belongs"];
    }
}

//var_dump($same_belongs);exit;
*/
/** -------------------------------------------------------
 * 3. 「2人目の所属情報を保持する」をやってみる
 *  -------------------------------------------------------
 */

$same_belongs = [];
$comparison_belongs = [];
$result = [];

foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $comparison_belongs = $youtuber["belongs"];
    }else{//2回目以降
        $comparison_belongs = my_array_intersect($comparison_belongs,$youtuber["belongs"]);
    }
}

var_dump($comparison_belongs);

/*
foreach($same_belongs as $same_belong){
    foreach($comparison_belongs as $comparison_belong){
        if($same_belong == $comparison_belong){
            $result[] = $comparison_belong;
        }
    }
}
var_dump($same_belongs);
var_dump($comparison_belongs);

*/

/*
$same_belongs = [];
foreach($youtubers as $key=>$youtuber){
    foreach($same_belongs as $same_belong){
        foreach($comparison_belongs as $comparison_belong){
            if($same_belong==$comparison_belong){
                $same_belongs=$comparison_belong;
            }
        }
    }
}

*/
//var_dump($same_belongs);
//echo "\n--------------------------\n";
//var_dump($result);



/*
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs = $youtuber["belongs"];
    }else{
        $comparison_belongs = $youtuber["belongs"];
    }
    foreach($same_belongs as $same_belong){
        //var_dump($same_belong);exit;
        foreach($comparison_belongs as $comparison_belong){
            //var_dump($comparison_belong);exit;
            if($same_belong == $comparison_belong){
                $same_belong=$comparison_belong;
//var_dump($result);exit;
//var_dump($same_belong);exit;//uuum-OK
            }
            //var_dump($result);exit;
            //var_dump($same_belong);exit;//uuum-OK
        }
        //var_dump($result);exit;
        //var_dump($same_belong);exit;//uuum-OK
    }
    //var_dump($same_belong);exit;//rikei-NG
}
//var_dump($result);
//echo $same_belong;
echo $same_belong."\n";*/

function my_array_intersect ($arrays1, $arrays2) {
    $answer_array = [];//デフォルトは必ず書く
    foreach ($arrays1 as $array1){
        foreach ($arrays2 as $array2){
            if ($array1 == $array2){
                $answer_array[] = $array1;
            }
        }
    }
    return $answer_array;
}
