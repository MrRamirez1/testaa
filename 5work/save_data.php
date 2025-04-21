<?php
// Получаем данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : '';
$activity = $_POST['activity'];
$comments = $_POST['comments'];

// Формируем строку для записи
$data = "Имя: $name\nEmail: $email\nВозраст: $age\nПол: $gender\nИнтересы: $interests\nРод деятельности: $activity\nКомментарии: $comments\n\n";

// Путь к файлу для записи данных
$file = 'user_data.txt';

// Открываем файл для добавления (если файл не существует, он будет создан)
file_put_contents($file, $data, FILE_APPEND);

// Перенаправляем пользователя на страницу с благодарностью или другой контент
echo "Спасибо за отправку анкеты!";
?>
