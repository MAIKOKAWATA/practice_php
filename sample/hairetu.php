<?php
$arr = [1,2,3,4];
/*
// 配列が得意
foreach ($arr as $key => $val) {
    echo $key."\n";
    echo $val."\n";
    echo "---\n";
}
*/

/*
// 数値のカウントアップが得意
for ($i=0;$i<count($arr);$i++) {
  echo $i."\n";
  echo $arr[$i]."\n";
  echo "---\n";
}
*/

// $iを$countと書くことも多い（$iを使うことは少ない？）
// 配列で使うことは少ない、時間、イベント待ちとか
// 不規則に増えるとき（でもあんま使わない）
$i = 0;
while ($i<count($arr)) {
  echo $i."\n";
  echo $arr[$i]."\n";
  echo "---\n";
  $i++;
}


/*
$colors = [
  "red" => "赤",
  "blue" => "青",
  "yellow" => "黄",
];

foreach ($colors as $key => $color) {
    echo $key."\n";
    echo $color."\n";
    echo "---\n";
}
*/

$humans = [
  "0" => [
    "name" => "yayoi",
    "age" => 27,
    "cloth" => [
      "pants",
      "skirt",
      "shirt",
      "glass",
    ],
  ],
  "1" => [
    "name" => "gun",
    "age" => 30,
    "cloth" => [
      "socks",
      "sweat",
      "skirt",
      "globe",
      "pants",
    ],
  ],
  "2" => [
    "name" => "maiko",
    "age" => 23,
    "cloth" => [
      "skirt",
      "shirt",
      "glass",
      "globe",
    ],
  ],
];

//echo $humans[0]["age"]; //PHPだと数値は「”」なくても動く

/*
$yayoi = $humans[0]["cloth"];
$gun = $humans[1]["cloth"];
$maiko = $humans[2]["cloth"];
$same_cloth = []; 

foreach ($yayoi as $yayoi_cloth){
  foreach ($gun as $gun_cloth){
    foreach ($maiko as $maiko_cloth){
      if($yayoi_cloth == $gun_cloth && $gun_cloth == $maiko_cloth){
        $same_cloth[] = $yayoi_cloth;
      }
    }
  }
}
*/
/**
 * 服の情報だけ持ってくる
 * 1人目の服の情報と2人目の服の情報を照らし合わせて合致するものを保持する
 * 保持したものと3人目を比べて合致するものを保持する
 * 保持したものと4人目を比べて合致するものを保持する
 * array_intersectが使える
 */


$flag = true;
  foreach ($humans as $human){
    if($flag==true){
      $same_cloth = $human["cloth"];
      $flag = false;
    }else{
      $same_cloth = array_intersect($same_cloth,$human["cloth"]);
    }
  }
var_dump($same_cloth);


//宿題：もう1個foreach増やして、何人になっても対応できるやつ作る