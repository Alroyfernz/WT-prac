<!DOCTYPE html>
<?php  
//start a session with this function
$cookie_name="Fullname";
$cookie_value="Alroy Fernandes";

setcookie($cookie_name,$cookie_value, time() + (86400 * 30),"/");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
   
</head>
<body>
<?php 
//display session variables
$multiA=array(
    array("Alroy","raj","baj"),
    array("GEC","PCCE","AITD"),
    array("2023","2022","2024")
);

foreach($multiA as $val){
    foreach($val as $res){
        echo "$res ";
    }
    echo "<br>";
}

?>
</body>

</html>