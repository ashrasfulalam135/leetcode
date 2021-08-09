<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

    //hash map solution (runtime 20ms; complexity o(n))
    function twoSum($nums, $target)
    {
        $output = [];
        $hashMap = [];
        foreach ($nums as $hashKey => $hashNum) {
            $hashMap[$hashNum] = $hashKey;
        }

        foreach ($nums as $key => $num) {
            $diff = $target - $num;
            if ($hashMap[$diff] && $key !== $hashMap[$diff]) {
                $output[] = $key;
                $output[] = $hashMap[$diff];
                return $output;
            }
        }
    }

    //Brute Force solution (runtime 2404ms; complexity o(n2))
    /*
    function twoSum($nums, $target)
    {
        $output = [];
        $copy_nums = $nums;
        foreach ($nums as $key1 => $num) {
            unset($copy_nums[$key1]);
            $temp_nums = $copy_nums;
            foreach ($temp_nums as $key2 => $temp_num) {
                if ($num + $temp_num == $target) {
                    $output[] = $key1;
                    $output[] = $key2;
                    return $output;
                }
            }
            $copy_nums = $nums;
        }
    }
    */
}
