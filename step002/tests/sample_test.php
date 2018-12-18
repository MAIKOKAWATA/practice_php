<?php

include('./vendor/autoload.php');
include('./step002/sample.php');

use PHPUnit\Framework\TestCase;

class JihanTest extends TestCase
{
    public function test000()
    {
        $res = [];
        $this->assertInternalType('array', $res);
        $this->assertInternalType('int', 1);
    }
    // inputValue()の検証 returnの型
    public function test001()
    {
        $_SERVER['argv'][1] = 'コーラ';
        $_SERVER['argv'][2] = '200';
        $res = inputValue();
        $this->assertInternalType('array', $res);
    }
    public function test002()
    {
        // $_SERVER['argv']に引数を設定する
        $_SERVER['argv'][1] = 'コーラ';
        $_SERVER['argv'][2] = '200';

        $res = inputValue();

        $this->assertEquals($res[0], 'コーラ');
        $this->assertEquals($res[1], 200);

        $this->assertInternalType('string', $res[0]);
        $this->assertInternalType('int', $res[1]);
    }

    // calc()の検証
    public function test003()
    {
        $output = calc('コーラ', 200);
        $otsuri = $output[0];
        $messege = $output[1];
        $this->assertEquals(80, $otsuri); //期待する値、検証する変数
        $this->assertInternalType('int', $otsuri);
        $this->assertEquals('', $messege);
        $this->assertInternalType('string', $messege);

        $output = calc('カルピス', 200);
        $otsuri = $output[0];
        $messege = $output[1];
        $this->assertEquals(50, $otsuri);
        $this->assertEquals('', $messege);

        $output = calc('ファンタ', 200);
        $otsuri = $output[0];
        $messege = $output[1];
        $this->assertEquals(200, $otsuri);
        $this->assertEquals('商品がありません', $messege);

        $output = calc('コーラ', 100);
        $otsuri = $output[0];
        $messege = $output[1];
        $this->assertEquals(false, $otsuri);
        $this->assertEquals('', $messege);
    }

    // outpitValue()の検証
    public function test004()
    {
        $this->expectOutputRegex('/.*コーラ.*/');
        $this->expectOutputRegex('/.*200.*/');
        $otsuri = outputValue('コーラ', 200);

        $this->expectOutputRegex('/.*モンスター.*/'); //ない商品
        $this->expectOutputRegex('/.*210.*/');
        $otsuri = outputValue('モンスター', 210);
        
    }
}