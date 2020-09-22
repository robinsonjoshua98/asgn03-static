<?php

class Bird {
    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = "yes";

    public static $instance_count = 0;
    public static $egg_num = 0;


    public static function create() {
        $class_name = get_called_class(); 
        $obj = new $class_name;          
        self::$instance_count++;
        return $obj;
      }
    
    function can_fly() {
       
        $flying_string = static::$flying["can fly"] ?? "is stuck on the ground";
        return  $flying_string ;
    }

   
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}

class flyCatcher extends Bird {
    public static $egg_num = "3-4, sometimes 5";
}