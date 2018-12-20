<?php
//2018年12月20日　
class Human{

    private $name = "";

    private $gender = "onnna";

    /*
    public function __construct($name, $gender = "onnna") {//コンストラクター＝newしたときに絶対呼ばれる(一定の条件化で絶対に呼ばれるもの＝マジックメソッド)
        $this->name = $name;//$name = "nanashi", $gender = "onnna"初期値
        //$this->gender = $gender;//必須にしたい初期値なしのものは最初に
        $this->setGender($gender);
    }
    */

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
        return $this;
    }

    public function setGender($gender){
        $this->gender = $gender;
        return $this;
    }
}


$human0 = new Human;//セッターを使うと順番適当でもOK
$human0->setGender("otoko")
    ->setName("hikakin")
    ->say();//チェインメソッド$thisを返すとできる


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
