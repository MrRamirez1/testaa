<?php

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : '';
$activity = $_POST['activity'];
$comments = $_POST['comments'];


$data = "Имя: $name\nEmail: $email\nВозраст: $age\nПол: $gender\nИнтересы: $interests\nРод деятельности: $activity\nКомментарии: $comments\n\n";


$file = 'user_data.txt';


file_put_contents($file, $data, FILE_APPEND);


echo "Спасибо за отправку анкеты!";
?>
