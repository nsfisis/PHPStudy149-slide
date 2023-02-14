<?php
try {
  f(3);
} catch (Throwable $e) {
  do {
    printf('%c', $e->getLine() + 21);
  } while ($e = $e->getPrevious());
  echo "\n";
}
function f(int $i) {
  if ($i < 0) return;
  try {
    match ($i) {
      0 => X, // 14行目




































      2 => X, // 51行目







      1, 3 => X, // 59行目
    };
  } finally {
    f($i - 1);
  }
}
