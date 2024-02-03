<?php
// function grow($x) {
//   $result = $x[0];
//   $length = count($x);

//   for ($i=1; $i < $length; $i++) { 
//     $result *= $x[$i];
//   }

//   return $result;
// }

// function grow($x) {
//   return array_reduce($x, function($carry, $item) {
//     return $carry * $item;
//   }, 1);
// }

function grow($x) {
  return array_product($x);
}

print_r(grow([4, 1, 1, 1, 4]));