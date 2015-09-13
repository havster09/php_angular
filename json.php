<?php
$countries = [
    ["name"=>"philippines"],
    ["name"=>"australia"],
];


$json = json_encode($countries);

print_r(json_decode($json));