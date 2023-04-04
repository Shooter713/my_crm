<?php
require_once __DIR__ . '/../Controller/BooksController.php';
require_once __DIR__ . '/../Controller/GenreController.php';

use Controller\BooksController;
use Controller\GenreController;

include 'include/layout.php';
include 'include/header.php';

$books = BooksController::index();
$genre = GenreController::index();
?>
<div class="container pt-md-5">
    <div class="row">
        <div class="col-md-6">
            <form action="/handler.php" method="post">
                <div class="form-group">
                    <label for="name">Назва книги</label>
                    <input type="hidden" name="method_name" id="method_name" value="addBook">
                    <input type="hidden" name="book_id" id="book_id">
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
                        foreach ($genre as $book){ ?>
                            <option value="<?php echo $book['id']?>"><?php echo $book['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Рік книги</label>
                    <input type="text" name="year" placeholder="Введіть рік книги" id="year" class="form-control">
                </div>
                <button type="submit" class="btn btn-success" onclick="$('#method_name').val('addBook');" id="addBook">Додати</button>
                <button type="submit" class="btn btn-info">Редагувати</button>
            </form>
        </div>
        <div class="col-md-6">
            <p>Список книг</p>
            <?php foreach ($books as $book){ ?>
                <div class="alert alert-info">
                    <div class="book-item book-<?php echo $book['id']?>">
                        <li><?php echo $book['id']?> - <?php echo $book['name']?></li>
                        <li class="author"><?php echo $book['author']?></li>
                        <li class="year"><?php echo $book['year']?></li>
                        <li class="genre_name"><?php echo $book['genre_name']?></li>
                        <button class="btn btn-info mt-3 edit-book" data-element-name="<?php echo $book['name']?>" data-element-id="<?php echo $book['id']?>">Редагувати</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include 'include/footer.php'?>
