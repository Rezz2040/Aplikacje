<?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color='red'){
            $this->name = $name;
            $this->color = $color;
        }
        function get_name() {
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }

    $apple = new Fruit("Apple");
    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
?>