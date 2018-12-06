<?php

list($shouhinmei, $kingaku) = inputValue();
//配列をリターンする
/**
 * $a = ["cola",300];
 * $syouhinmei = $a[0];
 * $kingaku = $a[1];
 * これを1行で
 */
$otsuri = calc($shouhinmei, $kingaku);
outputValue($shouhinmei, $otsuri);

/**
 * コマンドラインから引数を拾って商品名と金額を返却する関数
 * @return  array
 * in 関数の引数
 * out その関数を試した時のgettypeを書く
 * 
 */
function inputValue() {
    $args = $_SERVER['argv'];
    return [$args[1], $args[2]];
}

/**
 * 商品リストと照らし合わせてお釣り計算する関数
 * @param string $shouhinmei
 * @param int $kingaku
 * @return int 
 */
function calc($shouhinmei, $kingaku) {
    $otsuri="0";
    $list = [
        "karupis" => "150",
        "cola" => "120",
        "ryokutya" => "130",
        "monster" => "210"
    ];
    foreach($list as $key => $value){
        if($shouhinmei==$key){
            $syouhinmei=$key;
            $otsuri=$kingaku-$value;
        }
    }
    return $otsuri;
}

/**
 * 購入商品とお釣りをechoする関数
 * @param string $shouhinmei
 * @param int $otsuri
 * @return void
 */
function outputValue($shouhinmei, $otsuri) {
    echo $shouhinmei;//商品のエコー
    echo $otsuri;//おつりのエコー
}
