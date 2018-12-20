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
            ]//0-2で共通項はuuumのみ
    ],
/*    "3" => [
        "name" =>"takeyakisyo",
        "age" => 26,
        "belongs" => [
            "uuum",
            "origin_genesisone",        
        ]
    ],*/
    //タケヤキさん足しても、答えはuuumのみ
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

$same_belongs = [];
foreach($youtubers as $key=>$youtuber){
    if($key==0){
        $same_belongs = $youtuber["belongs"];
    }else{
        $comparison_belongs = $youtuber["belongs"];
    }
}
//var_dump($same_belongs);
//echo "\n--------------------------\n";
//var_dump($comparison_belongs);


foreach($same_belongs as $same_belong){
    foreach($comparison_belongs as $comparison_belong){
        if($same_belong==$comparison_belong){
            $same_belongs=$comparison_belong;
        }
    }
}
var_dump($same_belongs);//0と2






















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