<?php
/**
 * Created by PhpStorm.
 * User: Haven
 * Date: 13/09/15
 * Time: 9:10 AM
 */

class Country {
    public $name;
    public $code;
    public $states;

    public function __construct($name='',$code='',$states = array()){
        $this->name = $name;
        $this->code = $code;
        $this->states = $states;
    }
}