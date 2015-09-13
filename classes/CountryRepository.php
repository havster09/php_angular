<?php
/**
 * Created by PhpStorm.
 * User: Haven
 * Date: 13/09/15
 * Time: 9:23 AM
 */

require "Country.php";
require "State.php";

class CountryRepository {
    private static $countries = array();

    protected static function init(){
        $countries = array();

        array_push($countries,
        new Country('India','at',array(
            new State('Styria'),
            new State('Vienna')
        ))
        );

        array_push($countries,
            new Country('Canada','ca',array(
                new State('Ontario'),
                new State('bigtities')
            ))
        );

        array_push($countries,
            new Country('USA','us',array(
                new State('Texas'),
                new State('Los Angeles')
            ))
        );

        self::$countries = $countries;
    }

    public static function getCountries(){
        if(count(self::$countries) === 0){
            self::init();
        }
        return self::$countries;
    }
} 