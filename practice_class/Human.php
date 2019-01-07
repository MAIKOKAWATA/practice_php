<?php
//2018年12月20日　
class Human{

    //private $name = "";//private継承した先ではNULLになってしまう
    //外からは書き換えられないけど、継承先では書き換え可能なのはprotected
    protected $name = "";
    //private $gender = "onnna";
    protected $gender = "";
    
    public function __construct($name, $gender = "onnna") {//コンストラクター＝newしたときに絶対呼ばれる(一定の条件化で絶対に呼ばれるもの＝マジックメソッド)プロパティの次に書くことが多い
        $this->name = $name;//$name = "nanashi", $gender = "onnna"初期値
        //$this->gender = $gender;//必須にしたい初期値なしのものは最初に
        $this->setGender($gender);
    }
   

    public function say($a = "") {
//        var_dump($this);exit;
        if ($this->gender == "onnna") {
            echo "私の名前は".$this->name."よ".$a;
        } else {
            echo "俺の名前は".$this->name."だ".$a;
        }
        echo "\n";
    }

    public function setName($name) {
        $this->name = $name;
        //var_dump($this);exit;
        return $this;//$thisは今の自分の状態
    }

    public function setGender($gender){
        $this->gender = $gender;
        return $this;
    }
}
//YouTuber.phpを使うために封印
//$human0 = new Human;//【長所】セッターを使うと順番適当でもOK(引数でやると、順番が違うとエラーになる)
//$human0->setGender("otoko")
//    ->setName("hikakin")
//    ->say();//メソッドチェーン･･･setName()で$thisを返すとできる

//以下メモ用
//    $human5 = new Human;
//$human5->setGender("onnna")->setName("ayanan")->say();

/*
$human1 = new Human("hikakin", "otoko");
$human1->say();
$human1->setName("seikin");
$human1->say();
$human1->setName("hikakin");
//$human1->name = "hikakin";//public $name = "";の時
$human1->setGender("onnna");
$human1->say();
*/

/*
$human2 = new Human("sekinerisa", "onnna");
$human2->say();
$human3 = new Human("mikipon");
$human3->say("よ");
*/

