<?php
require_once __DIR__ . '/../Controller/GenreController.php';

use Controller\GenreController;

include 'include/layout.php';
include 'include/header.php';

$genre = GenreController::index();
?>
<div class="container pt-md-5">
    <div class="row">
        <div class="col-md-8">
            <form action="/handler.php" method="post">
                <div class="form-group">
                    <label for="name">Назва книги</label>
                    <input type="hidden" name="method_name" id="method_name" value="addBook">
                    <input type="text" name="name_book" placeholder="Введіть назву книги" id="name_book" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Автор книги</label>
                    <input type="text" name="name_author" placeholder="Введіть автора" id="name_author" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Жанр книги</label>
                    <select type="text" name="genre" id="genre" class="form-control">
                        <?php
                        foreach ($genre as $gen){ ?>
                            <option value="<?php echo $gen['id']?>"><?php echo $gen['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Рік книги</label>
                    <input type="text" name="year" placeholder="Введіть рік книги" id="year" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Введіть текст повідомлення</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Введіть текст повідомлення"></textarea>
                </div>
                <button type="submit" class="btn btn-success" id="addBook">Додати</button>
                <button type="submit" class="btn btn-info">Редагувати</button>
            </form>
        </div>
        <div class="col-md-4">
            <p>Список книг</p>
        </div>
    </div>
</div>
<?php include 'include/footer.php'?>
