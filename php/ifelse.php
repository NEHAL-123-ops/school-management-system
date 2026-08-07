<?php
$name = "Nehal";
$age = 15;
$is_student = true;

if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

switch (true) {
    case ($age < 15):
        echo "You are a child.";
        break;

    case ($age >= 15 && $age < 20):
        echo "You are a teenager.";
        break;

    case ($age >= 20):
        echo "You are an adult.";
        break;

    default:
        echo "Age not specified.";
}
?>