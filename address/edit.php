<?php 
include "../connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$table="address";
$addressid=filterRequest("addressid");
$name=filterRequest("name");
$city=filterRequest("city");
$street=filterRequest("street");
$lat=filterRequest("lat");
$long=filterRequest("long");



    $data=array(
    "address_city"=>$city,
        "address_street"=>$street,
    "address_lat"=>$lat,
    "address_long"=>$long,
     "address_name"=>$name,


);

updateData($table,$data,"adress_id= $addressid");
 

?>