<?php
try {
  f(3);
} catch (Throwable $e) {
  while ($e = $e->getPrevious()) printf('%c', $e->getLine() + 23);
  echo "\n";
}
function f(int $i) {
  if ($i < 0) f();
  try {
    match ($i) {
      0 => X, // 12行目




































      2 => X, // 49行目







      1, 3 => X, // 57行目
    };
  } finally {
    f($i - 1);
  }
}
