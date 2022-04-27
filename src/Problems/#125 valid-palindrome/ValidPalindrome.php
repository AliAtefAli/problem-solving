<?php

namespace Problem\ValidPalindrome;

class ValidPalindrome
{

    protected function reverseString($s): string
    {

    }
    /**
     * Time Complexity => O(n^2) =
     */
    function firstSolution(array $nums, int $target)
    {
        for ($i = 0; $i < count($nums); $i++) {

            for ($x = 0; $x < count($nums); $x++) {

                if (
                    ($nums[$i] + $nums[$x]) == $target
                ) {
                    return [$i, $x];

                }
            }

        }

        return -1;
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     * Example 1:
     *
     * Input: nums = [2,7,11,15], target = 9
     * Output: [0,1]
     * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
     */
    function sumTwoNumbers(array $nums, int $target)
    {
        $map = [];
        for ($i = 0; $i < count($nums); $i++) {
            $map[$nums[$i]] = $i;
        }
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            if (array_key_exists($complement, $map) && $map[$complement] != $i) {
                return [$i, $map[$complement]];
//                return "First index is: <strong>${i}</strong>, Second index is:  <strong>$map[$complement]</strong>";
            }
        }
        throw new IllegalArgumentException("No two sum solution");
    }
}