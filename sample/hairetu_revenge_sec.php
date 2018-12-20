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
//echo $youtubers[1]["name"];//tommyが出力されればOK
echo "\n";
echo "-------------";
echo "\n";

/**
 * foreachを1つ追加することで、何人になっても対応可能にする
 */
/**
 * 1 .全員の所属情報(belongs)のみをとってくる
 * 2 .1人目の所属情報を全て保持する
 * 3 .1人目の所属情報と2人目の所属情報を比較し、共通項を保持する
 * 4 .保持した共通項と3人目の所属情報を比較し、共通項を保持する
 */
/**
 * 今回の場合、uuumのみが出力されればOK
 */
/**
 * 1 .「全員の所属情報(belongs)のみをとってくる」をやってみる
 */

 //foreach($youtubers as $youtuber){
 //    $belong = $youtuber["belongs"];
     //上書きされていくのでこのままだと"2"の値がここにくる
// }

// var_dump($belong);
// echo "/n";

/**
 * 2. 「1人目の所属情報を全て保持する」をやってみる
 */

$same_belongs=[];
$comparison_belongs=[];
$result = [];
foreach ($youtubers as $key => $youtuber){
    if($key!=0){
        var_dump($comparison_belongs);exit;
        $comparison_belongs = $youtubers[$key]["belongs"];
        //var_dump($comparison_belongs);exit;
    }else{
    //var_dump($same_belongs);exit;
    $same_belongs = $youtubers[$key]["belongs"];        
    //var_dump($same_belongs);exit;

    }
//    if($same_belongs == $comparison_belongs){
//        $result = $same_belong;
//    }
    return $result;
}
/*
foreach ($youtubers as $key => $youtuber){
    if($key==0){
        //var_dump($same_belongs);exit;
        $same_belongs = $youtubers[$key]["belongs"];        
        //var_dump($same_belongs);exit;
    }else{
        var_dump($comparison_belongs);exit;
        $comparison_belongs = $youtubers[$key]["belongs"];
        //var_dump($comparison_belongs);exit;
    }
//    if($same_belongs == $comparison_belongs){
//        $result = $same_belong;
//    }
    return $result;
}
*/
var_dump($result);
//    $tameshi = $youtuber[$key]["belongs"];//この場合中身がどんどん上書きされて、"2"の人になる
//    $same_belongs = $youtubers[0]["belongs"];//"0"の人の情報が出る
//    $sec_belongs = $youtubers[1]["belongs"];
//    $thi_belongs = $youtubers[2]["belongs"];
//}
//var_dump($tameshi);
var_dump($same_belongs);echo "\n";
//var_dump($sec_belongs);echo "\n";
//var_dump($thi_belongs);echo "\n";

/**
 * 3. 1人目の所属情報($same_belongs)と
 * 2人目の所属情報(compa_belongs)を比較し、
 * 共通項を保持する
 */

