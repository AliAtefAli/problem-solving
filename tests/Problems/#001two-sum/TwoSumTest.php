<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Problem\TwoSum\TwoSum;

require_once 'src/Problems/#001two-sum/TwoSum.php';

class TwoSumTest extends TestCase
{

    public function testClassConstructor()
    {
        $nums   = [2, 11, 7, 15];
        $target = 9;
        $class  = new TwoSum();
        $result = $class->sumTwoNumbers($nums, $target);

        $this->assertSame($result, [0, 2]);
    }
}