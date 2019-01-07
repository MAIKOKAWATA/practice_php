<?php
/**
* 
* 2019/1/7
* 
* 継承　元のベースに固有のものを付け加える
* 
*/
include("Human.php");

class YouTuber extends Human {

    public function say($a = "") {
                if ($this->gender == "onnna") {
                    echo "私の名前は".$this->name."よ".$a;
                } else {
                    echo "俺の名前は".$this->name."だ".$a;
                }
                echo "\n";//Human.phpで共通部分のみを抜き出しておいてここで使うと効率が良くなります
            }
/**
 * オブジェクト指向では細かく分けていって、継承できたりするほうがいいとされている
 * Model・YouTuber－Human－哺乳類ー動物ーいきものみたいなメソッドの作り方
 * あとで対応しろっていわれそうな場合、共通点で親クラス(上記の場合、いきもの)つくっとく
 * Humanだけ、YouTuberだけでクラスをたくさんつくってたら、「dieってメソッドを入れるの忘れとったわー」
 * ってなるとHumanにもYouTuberにもdieを足さないといけないけど、
 * 上記のクラスの作り方をしておくと、いきものにdieを足すだけでよくなる。
 * 2つ以上の要素をextendsしたい場合はトレイトをつかう(!)トレイトは用法･容量を守りましょう
 */
	public function aisatsu() {
		echo "ブンブンハローYouTube";
	}
}




$youtuber1 = new YouTuber("HIKAKIN" , "otoko");
$youtuber1->aisatsu();
$youtuber1->say();
