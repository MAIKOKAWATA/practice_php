<?php
$sanrio_characters = [
    "kitty","gudetama","pompompurin",
];
/**
 * 後ろから値をとるとか一個飛ばしで値をとるのは
 * forのほうがやりやすい
 */
$gyakuSanrio = [];
$length = count($sanrio_characters)-1;

for ($i=$length;$i>=0;$i--) {
    $gyakuSanrio[] = $sanrio_characters[$i];
}
print_r($gyakuSanrio);