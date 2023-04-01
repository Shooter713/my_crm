<?php include 'include/layout.php'?>

<?php include 'include/header.php'?>

<?php
//    require_once ('../Controller/UsersController.php');
//    $users = UsersController::index();
//    var_dump($users);
?>

    <div class="row no-gutters">
        <div class="col-md-5 pt-md-5">
            <h1>Тут буде список відвідувачів</h1>
        </div>
        <div class="col-md-7">
            <div class="container pt-md-5">
                <form action="../handler.php" method="post">
                    <div class="form-group">
                        <label for="name">Введіть ім'я</label>
                        <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Введіть прізвище</label>
                        <input type="text" name="last_name" placeholder="Введіть прізвище" id="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Введіть email</label>
                        <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Введіть номер телефону</label>
                        <input name="telephone" placeholder="Введіть телефон" id="telephone" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success" id="addNewUser">Додати</button>
                    <button type="button" class="btn btn-info">Редагувати</button>
                </form>
            </div>
        </div>
    </div>

<?php include 'include/footer.php'?>

