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
 * 以下、トミーくん(水溜りボンド)と虫さん(東海オンエア)の共通項を拾ってみる
 * uuumとmizutamarionairがでれば正解
 */
/**
 * $mushi_belongs = $youtubers[0]["belongs"];
 * $tommy_belongs = $youtubers[1]["belongs"];
 * $result_belongs = [];
 * 
 * foreach ($mushi_belongs as $mushi_belong) {
 *     foreach ($tommy_belongs as $tommy_belong) {
 *         if($mushi_belong == $tommy_belong){
 *             $result_belongs[] = $mushi_belong;
 *         }
 *     }
 * }
 * var_dump($result_belongs);
 * echo "\n";
 * echo "-------------";
 * echo "\n";
 */
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
 * 
 * $i = 0;
 *  foreach ($youtubers as $youtuber){
 *     $i_belongs = $youtubers[$i]["belongs"];
 *     $i++;
 *     var_dump($i_belongs);
 * }
 */
/**
 * 2. 「1人目の所属情報を全て保持する」をやってみる
 * $i=0;
 * if($i==0){
 *     $same_belongs = $youtubers[$i]["belongs"];
 *     var_dump($same_belongs);        
 * }
 */

/**
 * 3. 1人目の所属情報($same_belongs)と
 * 2人目の所属情報(compa_belongs)を比較し、
 * 共通項を保持する
 */
echo "いまここ\nこの下に結果が出ないとだめ\n";
$i=0;
$result_belongs=[];
if($i==0){
    $same_belongs = $youtubers[$i]["belongs"];
    $i++;
//    var_dump($same_belongs);//OK
//    echo "\n ";
//    var_dump($i);  //OK
}

if($i>=1){
    foreach($youtubers as $youtuber){
        $compa_belongs = $youtubers[$i]["belongs"];
        foreach ($compa_belongs as $compa_belong){
            $compa_belong = $compa_belongs[$i];
        }
/**
 *        echo "1人目の情報";
 *         var_dump($same_belongs);
 *         echo "\n2人目の情報";
 *         var_dump($compa_belongs);
 *         exit;
 *  
 */ 
        $result_belongs = array_intersect($same_belongs,$compa_belongs);
        var_dump($result_belongs);
//        if($same_belongs == $compa_belongs){
//            $result_belongs = $same_belongs;
//            $i++;
//            foreach($result_belongs as $result_belong){
//                $result_belong = $result_belongs[$i];
//            }
//            var_dump($result_belongs);//NG
        //}
    }
}

 /**
 * 1st一気に書いてみて詰まった
 * $belongs = [];
 * $res = [];
 * $i=0;
 * foreach ($youtubers as $youtuber){
 *     if ( $youtuber === reset($youtubers)) {
 *         $same_belongs = $youtubers[$i]["belongs"];
 *         $i++;
 * //        echo $same_belongs;exit;
 *     }else{
 *         //foreach ($youtubers as $belongs => $belong){
 *             if ($same_belongs == $youtubers[$i]["belongs"]){
 *                 $res = $same_belongs;
 *                 $i++;
 *             }
 *         //}
 *     }
 * }
 * var_dump($same_belongs);
 */
