<?php

/**
 * 入金金額と購入希望商品を受け取り、
 * 商品の代金・商品名と比較・計算し
 * 購入商品名とおつりを返す。
 * 
 * @param int $in_nyuukin
 * @param string $in_drink
 * @return string $out_drink
 * @return int $out_otsuri
 * 
 */

$in_nyuukin = "300";
$in_drink = "ryokutya";

//$price=array("karupis"=>"150","cola"=>"120","ryokutya"=>"130","monster"=>"210");非推奨
//keyに日本語は使わないほうがいい (例)配列に連想配列をぶちこむ【やってみよう】
$price = [
    "karupis" => "150",
    "cola" => "120",
    "ryokutya" => "130",
    "monster" => "210"
];

foreach($price as $key => $value){
    //echo "$key...$value\n";
    if($in_drink==$key){
        $out_drink=$in_drink;
        $out_otsuri=$in_nyuukin-$value; 
    }
}

echo $out_drink;//商品のエコー
echo $out_otsuri;//おつりのエコー