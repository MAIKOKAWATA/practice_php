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
];
/** ------------------------------------------------------
 * 1 .「全員の所属情報(belongs)のみをとってくる」をやってみる
 * -------------------------------------------------------
 */
/*$belongs=[];
 foreach($youtubers as $key=>$youtuber){
    $belongs[] = $youtubers[$key]["belongs"];
}*/

/** -------------------------------------------------------
 * 2. 「1人目の所属情報を全て保持する」をやってみる
 * --------------------------------------------------------
 */
/*$same_belongs = "";
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs = $youtubers[$key]["belongs"];
    }
}*/


/** -------------------------------------------------------
 * 3. 「2人目の所属情報を保持する」をやってみる
 *  -------------------------------------------------------
 */
/*
$same_belongs = "";
$comparison_belongs = [];
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs = $youtubers[$key]["belongs"];
        //var_dump($same_belongs);exit;
    }else{
        $comparison_belongs[] = $youtubers[$key]["belongs"];
        //var_dump($comparison_belongs);exit;
    }
}
*/
/** -------------------------------------------------------
 * 4. 1人目の所属情報($same_belongs)と
 * 2人目の所属情報(compa_belongs)を比較し、
 * 共通項を保持する
 *  -------------------------------------------------------
 */

$same_belongs = "";
$comparison_belongs = [];
$result = [];
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs = $youtubers[$key]["belongs"];
        //var_dump($same_belongs);exit;
    }else{
        $comparison_belongs[] = $youtubers[$key]["belongs"];
        //var_dump($comparison_belongs);exit;
    }
}

foreach($same_belongs as $same_belong){
    //var_dump($same_belong);exit;
    foreach($comparison_belongs as $comparison_belong){
        //var_dump($comparison_belong);exit;
        if($same_belong == $comparison_belong){
            $result[] = $same_belong;
            var_dump($result);exit;
        }
    }
}
//var_dump($result);exit;



 /*
$belongs = [];
$same_belongs = [];
$comparison_belongs = [];
$result = [];
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs[] = $youtubers[$key]["belongs"];
//        var_dump($same_belongs);exit;
    }else{
        $comparison_belongs[] = $youtubers[$key]["belongs"];
//        var_dump($comparison_belongs);exit;
    }
}
//var_dump($comparison_belongs);exit;
foreach($same_belongs as $same_belong){
    //var_dump($same_belong);exit;
    foreach($comparison_belongs as $comparison_belong){
        //var_dump($comparison_belong);exit;
        if($same_belong == $comparison_belong){
            $result[] = $same_belong;
        }
    }
}


foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs[] = $youtubers[$key]["belongs"];
//        var_dump($same_belongs);exit;
    }else{
        $comparison_belongs[] = $youtubers[$key]["belongs"];
//        var_dump($comparison_belongs);exit;
    }
}
//var_dump($same_belongs);exit;
//var_dump($comparison_belongs);exit;
foreach($same_belongs as $same_belong){
    //var_dump($same_belong);exit;
    foreach($comparison_belongs as $comparison_belong){
        //var_dump($comparison_belong);exit;
        if($same_belong == $comparison_belong){
            $result[] = $comparison_belong;
        }
    }
}

var_dump($result);exit;
*/