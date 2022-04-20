<?php
class Titan {

    public $level;

    public function __construct($level){
        $this->level = $level;
    }
}

require_once "./human.php";
require_once "./beast.php";
require_once "./attack.php";
require_once "./armor.php";