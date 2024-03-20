<?php
for ($i = 1; $i <= 5; $i++){
    echo $i * 2 . '<br />';
}

$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

$c = 0;
while ($c < 10) {
    if ($c == 5) {
        break;
    }

    echo $c . '<br />';
    $c++;
}

$d = 0;
while ($d <10) {
    if ($d == 5) {
        $d++;
        continue;
    }
    echo $d . '<br />';
    $d++;
}

$f = 0;
while ($f <= 100) {
    if ($f === 20) {
        break;
    }
    if ($f % 3 === 0) {
        $f++;
        continue;
    }
    echo $f . '<br />';
    $f++;
}

$num = 0;
do {
    echo 'num = ' . $num . '<br />';
    $num += 1;
}while ($num < 3);

$Fizz = 'Fizz';
$Buzz = 'Buzz';
$FizzBuzz = 'FizzBuzz';

for ($j = 1; $j < 50; $j++){
    if ($j % 15 == 0){
        echo $FizzBuzz;
    }else if ($j %3 == 0) {
        echo $Fizz;
    }else if ($j % 5 == 0){
        echo $Buzz;
    }else {
        echo $j;
    }
}

for ($k = 1; $k < 6; $k++) {
  for ($l = 1; $l < 6; $l++) {
    echo "●";
  }
  echo "<br />";
}