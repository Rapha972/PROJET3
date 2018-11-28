<?php
Class A{

    public $test;
    public function text($car){
        $this->test =$car;
    
}
}
$B = NEW A();
$B->text('jojo');    
var_dump($B);
$C = NEW A();
var_dump($C);
    