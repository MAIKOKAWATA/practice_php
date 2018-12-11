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
        $otsuri = calc('コーラ', 200);
        $this->assertEquals(80, $otsuri);
        $this->assertInternalType('int', $otsuri);

        $otsuri = calc('カルピス', 200);
        $this->assertEquals(50, $otsuri);

        $otsuri = calc('ファンタ', 200);
        $this->assertEquals(200, $otsuri);

        $otsuri = calc('コーラ', 100);
        $this->assertEquals(false, $otsuri);
    }

    // outpitValue()の検証
    public function test004()
    {
        $this->expectOutputRegex('/.*コーラ.*/');
        $this->expectOutputRegex('/.*200.*/');
        $otsuri = outputValue('コーラ', 200);

    //    $this->expectOutputRegex('/.*モンスター.*/');//ない商品
    //    $this->expectOutputRegex('/.*210.*/');
    //    $otsuri = outputValue('モンスター', 200);
        
    }
}