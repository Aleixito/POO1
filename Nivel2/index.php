
<?php

class PokerDice {
    private $faces;
    private $throws;

    public function __construct() {
        $this->faces = ['As', 'K', 'Q', 'J', '7', '8'];
        $this->throws = 0;
    }

    public function throw() {
        $this->throws++;
        return rand(0, 5);
    }

    public function shapeName($index) {
        return $this->faces[$index];
    }

    public function getTotalThrows() {
        return $this->throws;
    }
}

?>