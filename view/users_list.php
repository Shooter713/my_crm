<?php
require_once __DIR__ . '/../Controller/BooksController.php';
require_once __DIR__ . '/../Controller/UsersController.php';
require_once __DIR__ . '/../Controller/ListController.php';

use Controller\BooksController;
use Controller\ListController;
use Controller\UsersController;

include 'include/layout.php';
include 'include/header.php';

$books = BooksController::getBooksInStock();
$users = UsersController::index();
$lists = ListController::index();
?>

<div class="container-fluid">
    <div class="row pt-md-5">
        <div class="col-md-4">
            <p class="alert-info d-flex p-3 text-blue">Форма видачі</p>
            <form action="/handler.php" method="post">
                <input type="hidden" name="method_name" value="addName">
                <div class="form-group">
                    <label for="name_book">Назва книги</label>
                    <select class="form-control" name="book_id" required>
                        <?php
                        foreach ($books as $book){ ?>
                            <option value="<?php echo $book['id']?>"><?php echo $book['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Кому видано</label>
                    <select class="form-control" name="user_id">
                        <?php
                        foreach ($users as $user){?>
                            <option value="<?php echo $user['id'] ?>"><?php echo $user['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Дата видачі</label>
                    <input type="datetime-local" name="date" id="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Взяти</button>
            </form>
        </div>
        <div class="col-md-4">
            <p class="alert-info d-flex p-3 text-blue">Форма повернення</p>
            <form action="/handler.php" method="post">
                <div class="form-group">
                    <label for="name_book">Назва книги</label>
                    <input type="hidden" name="method_name" value="returnBook">
                    <select class="form-control" name="journal_id">
                        <?php foreach ($lists as $list){ ?>
                            <?php if ($list['date_return'] == null){ ?>
                                <option value="<?php echo $list['journal_id']?>"><?php echo $list['book_name']?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Дата Повернення</label>
                    <input type="datetime-local" name="date" id="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Повернути</button>
            </form>
        </div>
        <div class="col-md-4">
            <?php include 'include/journalList.php'?>
        </div>
    </div>
</div>

<?php include 'include/footer.php'?>
