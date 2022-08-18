<?php
$name=$_POST["name"];
$email=$_POST["email"];
$choose1=$_POST["section1"];
$choose2=$_POST["section2"];
$choose3=$_POST["section3"];

$rating=$_POST["rating"];

// echo $name;
// echo $email;
// echo $choose;
// echo $rating;

echo "Thank you for your feedback.The details submitted by you are as follows. <br>";
echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Sections visited: ".$choose1." " .$choose2. " ".$choose3."<br>";
echo "Overall feedback: ".$rating;

?>