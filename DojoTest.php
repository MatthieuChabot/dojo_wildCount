<?php
use PHPUnit\Framework\TestCase;

include 'code.php';

final class DojoTest extends TestCase {

     /**
     * @dataProvider arrayProvider
     */
    public function testWildCount($array): void {

        $actual = wildCount($array);
        $expected = count($array);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider arrayProvider
     */
    public function testWildMin(array $array): void {

        $actual = wildMin($array);
        $expected = min($array);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider arrayProvider
     */
    public function testWildMax(array $array): void {

        $actual = wildMax($array);
        $expected = max($array);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider arrayProvider
     */
    public function testWildSort(array $array): void {

        $actual = wildSort($array);
        $expected = sort($array);

        $this->assertEquals($expected, $actual);
    }



    public function arrayProvider()
    {
        return [
            [[1, 2, 3, 4]],
            [[18, 21, 13, -4]],
            [[521, -621, 83, -54, 0, 8, 1012]],
            [[-3, -75, -26, -54, -43]],
            [[]],
            [[9, 26, -999, 78, null, 76, 3]],
            [[1,1,1,1,-1,-1,1,-1,1]],
            [[12]],
            [[0]]
        ];
    }
}
