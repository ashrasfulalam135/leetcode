  class Solution {
    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    //Brute Force
    function twoSum($nums, $target) {
        $output = [];
        $copy_nums = $nums;
        foreach($nums as $key1=>$num){
            unset($copy_nums[$key1]);
            $temp_nums = $copy_nums;
            foreach($temp_nums as $key2=>$temp_num){
                if($num+$temp_num == $target){
                    $output[]=$key1;
                    $output[]=$key2;
                    return $output;
                }
            }
            $copy_nums = $nums;
        }
    }
}