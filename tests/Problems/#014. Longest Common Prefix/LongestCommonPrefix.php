<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Problem\LongestCommonPrefix\LongestCommonPrefix as Long;

require_once 'src/Problems/#14. Longest Common Prefix/LongestCommonPrefix.php';

class LongestCommonPrefix extends TestCase
{

    public function testClassConstructor()
    {
        $class = new Long();

        $case1 = ["flower", "flow", "flight"];
        $case2 = ["flower", "flow"];
        $case3 = ["a"];
        $case4 = ["dog", "racecar", "car"];
        $case5 = ["cir", "car"];
        $case6 = ["acc","aaa","aaba"];

        $result1 = $class->getLongestCommonPrefix($case1);
        $result2 = $class->getLongestCommonPrefix($case2);
        $result3 = $class->getLongestCommonPrefix($case3);
        $result4 = $class->getLongestCommonPrefix($case4);
        $result5 = $class->getLongestCommonPrefix($case5);
        $result6 = $class->getLongestCommonPrefix($case6);

        $this->assertSame($result1, "fl");
        $this->assertSame($result2, "flow");
        $this->assertSame($result3, "a");
        $this->assertSame($result4, "");
        $this->assertSame($result5, "c");
        $this->assertSame($result6, "a");
    }
}