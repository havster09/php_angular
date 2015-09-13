<?php
/**
 * Created by PhpStorm.
 * User: Haven
 * Date: 13/09/15
 * Time: 9:36 AM
 */
require '../classes/CountryRepository.php';
header('Content-type:application/json');

echo ")]}'\n";

$countries = CountryRepository::getCountries();

echo json_encode($countries);

