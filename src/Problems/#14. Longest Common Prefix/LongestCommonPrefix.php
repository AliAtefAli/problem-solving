<?php

namespace Problem\LongestCommonPrefix;

class LongestCommonPrefix
{
    /**
     *
     * 1- get the common between first element and the next.
     * 2- if there are no common return empty string.
     * 3- if there are common then replace the first element with the common string, and remove the next element.
     *
     */
    public function getLongestCommonPrefix(array $strs): string
    {
        $common = "";
        if (count($strs) == 1) {
            return $strs[0];
        }
        for ($i = 0; $i < count($strs) - 1; $i++) {
            $current      = $strs[$i];
            $next         = $strs[$i + 1];
            $common       = $this->commonPrefixBetweenTwoStrings($current, $next);
            $strs[$i + 1] = $common;

            if (strlen($common) < 1) {
                return "";
            }
        }
        return $common;
    }

    protected function commonPrefixBetweenTwoStrings($first, $second): string
    {
        $common = "";
        $lowest = (strlen($first) < strlen($second)) ? strlen($first) : strlen($second);
        for ($i = 0; $i < $lowest; $i++) {
            if ($first[$i] == $second[$i]) {
                $common .= $first[$i];
            } else {
                return $common;
            }
        }

        return $common;
    }
}