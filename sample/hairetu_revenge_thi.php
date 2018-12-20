<?php
//https://gray-code.com/php/foreach-syntax/
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
    //var_dump($same_belongs);exit;//ここ
    foreach($comparison_belongs as $comparison_belong){
        //var_dump($comparison_belongs);exit;//ここ
        if($same_belong == $comparison_belong){
            //$same_belong=$comparison_belong;$same_belongs[]も$same_belongもOUT
            $result[] = $comparison_belong;
//var_dump($result);exit;//uuum(OK)ここ
            //var_dump($result);//2回目のループでorigin_genesisone入ってきてNG
        }
        //var_dump($result);exit;//9回目のループでorigin_genesisone入ってきてNG
    }
    //var_dump($result);//uuum
}
//var_dump($result);exit;//uuumとorigin_genesisone

//    if($same_belongs == $comparison_belongs){
//        $result = $comparison_belongs;
        //これでは配列同士で比べるので$resultがarray(0)になってしまう
//    }
//$youtuber[1]["belongs"]がとれてない
//echo "\n-----------------------------\n";
//var_dump($youtuber[1]["belongs"]);
echo "\n-----------------------------\n";
var_dump($same_belongs);
echo "\n-----------------------------\n";
var_dump($comparison_belongs);
echo "\n-----------------------------\n";
var_dump($result);
exit;