<?php
require_once __DIR__ . '/../Controller/UsersController.php';

use Controller\UsersController;

include 'include/layout.php';
include 'include/header.php';

$users = UsersController::index();
?>

    <div class="row no-gutters">
        <div class="col-md-5 pt-md-5">
            <?php foreach ($users as $user){ ?>
                <div class="user-item user-<?php echo $user['id']; ?>">
                    <div class="id"><?php echo $user['id']; ?></div>
                    <div class="name"><?php echo $user['name']; ?></div>
                    <div class="last_name"><?php echo $user['last_name']; ?></div>
                    <div class="email"><?php echo $user['email']; ?></div>
                    <div class="telephone"><?php echo $user['telephone']; ?></div>
                    <button class="btn btn-primary edit-user" data-element-id="<?php echo $user['id']; ?>">Edit USer</button>
                </div>

            <?php  } ?>
        </div>
        <div class="col-md-7">
            <div class="container pt-md-5">
                <form action="/handler.php" method="post">
                    <input type="hidden" name="method_name" id="method_name" value="addUser">
                    <input type="hidden" name="user_id" id="user_id">
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
                    <button type="submit" onclick="$('#method_name').val('addUser');" class="btn btn-success" id="addNewUser">Додати</button>
                    <button type="submit" class="btn btn-info">Редагувати</button>
                </form>
            </div>
        </div>
    </div>

<?php include 'include/footer.php'?>

