<?php
class Solution
{
  /**
   * @param Integer $x
   * @return Integer
   */
  function reverse($x)
  {
    if ($this->is32BitInt($x)) {
      $nonNegative = ($x < 0) ? -1 : 1;
      $intArr = str_split("$x");
      $revInt = '';
      for ($x = count($intArr) - 1; $x >= 0; $x--) {
        $revInt .= $intArr[$x];
      }
      $reverseInt = (int)$revInt * $nonNegative;

      return ($this->is32BitInt($reverseInt)) ? $reverseInt : 0;
    }

    return 0;
  }

  private function is32BitInt($int)
  {
    return ((-1 * 2 ** 31) <= $int && $int <= (2 ** 31 - 1)) ? 1 : 0;
  }
}
