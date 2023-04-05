<?php
require_once __DIR__ . '/../Controller/UsersController.php';

use Controller\UsersController;

include 'include/layout.php';
include 'include/header.php';

$users = UsersController::index();
?>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-7">
                <div class="container pt-md-5">
                    <form action="/handler.php" method="post">
                        <input type="hidden" name="method_name" id="method_name" value="addUser">
                        <input type="hidden" name="user_id" id="user_id">
                        <div class="form-group">
                            <label for="name">Введіть ім'я</label>
                            <input type="text" name="name" placeholder="Введіть ім`я" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Введіть прізвище</label>
                            <input type="text" name="last_name" placeholder="Введіть прізвище" id="last_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Введіть email</label>
                            <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Введіть номер телефону</label>
                            <input name="telephone" placeholder="Введіть телефон" id="telephone" class="form-control" required>
                        </div>
                        <button type="submit" onclick="$('#method_name').val('addUser');" class="btn btn-success" id="addNewUser">Додати</button>
                        <button type="submit" class="btn btn-info">Редагувати</button>
                    </form>
                </div>
            </div>
            <div class="col-md-5 pt-md-5 pl-2">
                <?php foreach ($users as $user){ ?>
                    <div class="alert alert-info">
                        <div class="user-item user-<?php echo $user['id']; ?>">
                            <li class="id"><?php echo $user['id']; ?></li>
                            <div class="container-fluid">
                                <div class="row ">
                                    <li class="name"><?php echo $user['name']; ?></li>
                                    <div class="last_name mx-2"><?php echo $user['last_name']; ?></div>
                                </div>
                            </div>
                            <li class="email"><?php echo $user['email']; ?></li>
                            <li class="telephone"><?php echo $user['telephone']; ?></li>
                            <button class="btn btn-info mt-3 edit-user" data-element-id="<?php echo $user['id']; ?>">Редагувати</button>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>

<?php include 'include/footer.php'?>

