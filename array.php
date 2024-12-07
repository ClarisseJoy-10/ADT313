 <h1>array</h1>
 
 
 <?php
 $cars = array("Volvo","bmw","toyota");
 $cars = ["Volvo","bmw","toyota"];

echo $cars[0];

$userinformation = array(
    "firstname" => "Clarisse",
    "lastname" => "Cunanan",
    "role" => "admin",

);
echo $userinformation ["role"];
print_r($userinformation);
echo "<br/>";

?>