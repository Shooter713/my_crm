<?php



// Підключитися до бази даних
$db = new mysqli('localhost', 'root', '', 'my_crm');

// Перевірити, чи є помилки при підключенні до бази даних
if ($db->connect_error) {
    die('Помилка підключення до бази даних: ' . $db->connect_error);
}

// Отримати дані з AJAX-запиту
$name       = $_POST['name'];
$last_name  = $_POST['last_name'];
$email      = $_POST['email'];
$telephone  = $_POST['telephone'];

// Зберегти дані у базі даних
$sql = "INSERT INTO `users` (`name`, `last_name`, `email`, `telephone`) VALUES ('$name', '$last_name', '$email', '$telephone')";
if ($db->query($sql) === TRUE) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false, 'message' => $db->error));
}

// Закрити підключення до бази даних
$db->close();


//if ($method == 'addUser'){
//    $user = Controller\UsersController::addUser();
//    echo json_encode(array('success'=>true));
//}
