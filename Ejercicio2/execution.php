
<?php
require_once 'PokerDice.php';

$dices = [];

for ($i = 0; $i < 5; $i++) {
    $dices[$i] = new PokerDice();
}

echo "Echando 5 dados de póquer...\n";

foreach ($dices as $index => $dice) {
    $result = $dice->throw();
    echo "Dado " . ($index + 1) . ": " . $dice->shapeName($result) . "\n";
}

echo "Número total de tiradas: " . array_sum(array_map(function($dice) {
    return $dice->getTotalThrows();
}, $dices)) . "\n";
?>