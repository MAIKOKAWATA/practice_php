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
echo $youtubers[1]["name"];//tommyが出力されればOK
/**
 * 以下、トミーくん(水溜りボンド)と虫さん(東海オンエア)の共通項を拾ってみる
 * uuumとmizutamarionairがでれば正解
 */
$mushi_belongs = $youtubers[0]["belongs"];
$tommy_belongs = $youtubers[1]["belongs"];
$result_belongs = [];

foreach ($mushi_belongs as $mushi_belong) {
    foreach ($tommy_belongs as $tommy_belong) {
        if($mushi_belong == $tommy_belong){
            $result_belongs[] = $mushi_belong;
        }
    }
}
var_dump($result_belongs);
/**
 * foreachを1つ追加することで、何人になっても対応可能にする
 */
/**
 * 1 .全員の所属情報(belongs)のみ
 * 2 .
 */