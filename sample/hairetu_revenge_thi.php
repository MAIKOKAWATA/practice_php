<?php

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
            ]
    ],
/*    "3" => [
        "name" =>"saguwa",
        "age" => 20,
        "belongs" => [
            "origin_nakamaya",
            "origin_genesisone",        
        ]
    ],*/
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
*/
//var_dump($belongs);exit;

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
*/
//var_dump($same_belongs);exit;

/** -------------------------------------------------------
 * 3. 「2人目の所属情報を保持する」をやってみる
 *  -------------------------------------------------------
 */

$same_belongs = [];
$comparison_belongs = [];
$result = [];
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs = $youtuber["belongs"];//1人目
    }else{
        $comparison_belongs = $youtuber["belongs"];
        //var_dump($comparison_belongs);exit;
    }
    //return $same_belongs;
    //return $comparison_belongs;
}
//$same_belongsと$comparison_belongsを
//それぞれforeachでまわして値一個ずつにして比べる必要有
foreach($same_belongs as $same_belong){
    foreach($comparison_belongs as $comparison_belong){
        if($same_belong == $comparison_belong){
            $result[] = $comparison_belong;
        }
    }
}

//    if($same_belongs == $comparison_belongs){
//        $result = $comparison_belongs;
        //これでは配列同士で比べるので$resultがarray(0)になってしまう
//    }
var_dump($same_belongs);
echo "\n-----------------------------\n";
var_dump($comparison_belongs);
echo "\n-----------------------------\n";
var_dump($result);
exit;