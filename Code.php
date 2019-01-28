function almostIncreasingSequence($s) {
    $c = 0;
    for($i=0; $i<count($s)-1; $i++) {
        if ($s[$i]>=$s[$i+1]) {
          $c++;
          }
        if ($i+2<count($s)&&$s[$i]>=$s[$i+2]) {
         $c++;
          }
        }
    return $c < 3;
    }
