<?php
$sanrio =[];
//$sanrio =[];にどんどんデータを入れる
$sanrio[]="kitty";  
$sanrio[]="gudetama";
$sanrio[]="pochacco";
var_dump($sanrio);
//配列の1番目にデータを入れたいとき array_unshift
//http://php.net/manual/ja/function.array-unshift.php
$a = my_array_unshift($sanrio,"pomupomupurin");
var_dump($a);
var_dump($sanrio);
//int array_unshift ( array &$array [, mixed $... ] )
//                          ↑参照値渡し
//$sample = array_unshift($sanrio,"pomupomupurin");var_dump($sample);
//で返ってくるのはint(4)(配列の長さ)
function my_array_unshift (&$add_arrays,$add_string) {
    //&は引数の$add_arraysが置き換わるという意味
    $result = [];
    $result[] = $add_string;
    foreach ($add_arrays as $add_array) {
        $result[] = $add_array;
    }
    $add_arrays = $result;
    return count($result);
}
$b = my_array_pop($sanrio);
var_dump($b);//string(8) "pochacco"
var_dump($sanrio);
/**
 * array(3) {
 *   [0]=>
 *   string(13) "pomupomupurin"
 *   [1]=>
 *   string(5) "kitty"
 *   [2]=>
 *   string(8) "gudetama"
 * }
 */
function my_array_pop (&$take_arrays) {
    $result = [];
    foreach ($take_arrays as $take_array){
        if(end($take_arrays)!=$take_array){
            $result[] = $take_array;            
        }else{
            $take_string = $take_array;
        }
    }
    $take_arrays = $result;
    return $take_string;
}
