<?php
//╔╗╔╗╔╗╔╗╔═══╗╔══╗╔╗╔══╗╔══╗╔╗╔══╗──╔══╗╔╗╔╗
//║║║║║║║║║╔═╗║║╔═╝║║║╔═╝╚╗╔╝║║║╔═╝──║╔╗║║║║║
//║╚╝║║║║║║╚═╝║║║──║╚╝║───║║─║╚╝║────║║║║║╚╝║
//╚═╗║║║║║║╔╗╔╝║║──║╔╗║───║║─║╔╗║────║║║║╚═╗║
//─╔╝║║╚╝║║║║║─║╚═╗║║║╚═╗╔╝╚╗║║║╚═╗╔╗║╚╝║──║║
//─╚═╝╚══╝╚╝╚╝─╚══╝╚╝╚══╝╚══╝╚╝╚══╝╚╝╚══╝──╚╝
use Higherror\RelokiaTestProject\Http;
use Higherror\RelokiaTestProject\Ticket;
use Higherror\RelokiaTestProject\Get;
use Higherror\RelokiaTestProject\MigrateUser;

require 'vendor/autoload.php';


//$test = [
//    [
//        'id' => 1,
//        'name' => "namea",
//        "firstname" => "first1"
//    ],
//    [
//        'id' => 2,
//        'name' => "nameq",
//        "firstname" => "first2"
//    ],
//    [
//        'id' => 3,
//        'name' => "namew",
//        "firstname" => "first3"
//    ],
//    [
//        'id' => 4,
//        'name' => "namer",
//        "firstname" => "first4"
//    ]
//];
//
//$test2 = [
//    "FIRST" => 1,
//    "Second" => 2,
//    "ThIrd" => 3
//];
//
//$result = "";
//
//$q = "abrakadabra test  fffff";
//
////$test2 = stristr("$q", "test");
//
//$test3 = strpos($q, 'test');
//if($test3)
//{
//    $result = "Found";
//}


//my code /////////////////////////

$objectMigrate = new MigrateUser();
$objectMigrate->Group();
//////////////////////////////////
///


//    $array2 = array('user' => array('name' => $value['name'], 'email' => $value['email'], 'phone' => $value['phone'], 'role' => "end-user"));   // create array with filter data
//    $json = json_encode($array2);         // generate json
//    $send = Http::send_data($json);    // send json data on zendesk

$tet = '1';
