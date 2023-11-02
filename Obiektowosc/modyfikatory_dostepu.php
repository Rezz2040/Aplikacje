<?php
    class Fruit {
        public $name;
        protected $color;
        private $weight;
    }

    $mango = new Fruit();
    $mango->name = 'Mango'; // OK
    $mango->color = 'yellow'; // ERROR
    $mango->weight = '300'; // ERROR
?>